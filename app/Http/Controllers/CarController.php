<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Repositories\CarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Carimage;


class CarController extends AppBaseController
{
    /** @var CarRepository $carRepository*/
    private $carRepository;

    public function __construct(CarRepository $carRepo)
    {
        $this->carRepository = $carRepo;
    }

    /**
     * Display a listing of the Car.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cars = $this->carRepository->all();

        return view('cars.index')
            ->with('cars', $cars);
    }

    /**
     * Show the form for creating a new Car.
     *
     * @return Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created Car in storage.
     *
     * @param CreateCarRequest $request
     *
     * @return Response
     */
    public function store(CreateCarRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $path = $file->store('uploads', 'public');
        } else {
            $path = "";
        }
        $input['profile'] = $path;




        $car = $this->carRepository->create($input);
        $insertedId = $car->id;


        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $filename = uniqid() . '.' . $image->getClientOriginalExtension();
                  $path =  $image->storeAs('images', $filename);
                  $arr = array(
                    'car' => $insertedId,
                    'images' => $path
                  );
                   Carimage::create($arr);
            }
        }
        Flash::success('Car saved successfully.');
        return redirect(route('cars.index'));
    }

    /**
     * Display the specified Car.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified Car.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $car = $this->carRepository->find($id);
        $carimages = Carimage::where('car',$id)->get();
        if (empty($car)) {
            Flash::error('Car not found');
            return redirect(route('cars.index'));
        }
        return view('cars.edit',['car' => $car,'gallery'=>$carimages]);
    }

    /**
     * Update the specified Car in storage.
     *
     * @param int $id
     * @param UpdateCarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarRequest $request)
    {
        $car = $this->carRepository->find($id);



        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $filename = uniqid() . '.' . $image->getClientOriginalExtension();
                  $path =  $image->storeAs('images', $filename);
                  $arr = array(
                    'car' => $id,
                    'images' => $path
                  );
                   Carimage::create($arr);
            }
        }

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        $car = $this->carRepository->update($request->all(), $id);

        Flash::success('Car updated successfully.');

        return redirect(route('cars.index'));
    }

    /**
     * Remove the specified Car from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        $this->carRepository->delete($id);

        Flash::success('Car deleted successfully.');

        return redirect(route('cars.index'));
    }
}
