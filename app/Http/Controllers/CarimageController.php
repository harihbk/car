<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarimageRequest;
use App\Http\Requests\UpdateCarimageRequest;
use App\Repositories\CarimageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class CarimageController extends AppBaseController
{
    /** @var CarimageRepository $carimageRepository*/
    private $carimageRepository;

    public function __construct(CarimageRepository $carimageRepo)
    {
        $this->carimageRepository = $carimageRepo;
    }

    /**
     * Display a listing of the Carimage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $carimages = $this->carimageRepository->all();

        return view('carimages.index')
            ->with('carimages', $carimages);
    }

    /**
     * Show the form for creating a new Carimage.
     *
     * @return Response
     */
    public function create()
    {
        return view('carimages.create');
    }

    /**
     * Store a newly created Carimage in storage.
     *
     * @param CreateCarimageRequest $request
     *
     * @return Response
     */
    public function store(CreateCarimageRequest $request)
    {
        $input = $request->all();

        $carimage = $this->carimageRepository->create($input);

        Flash::success('Carimage saved successfully.');

        return redirect(route('carimages.index'));
    }

    /**
     * Display the specified Carimage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carimage = $this->carimageRepository->find($id);

        if (empty($carimage)) {
            Flash::error('Carimage not found');

            return redirect(route('carimages.index'));
        }

        return view('carimages.show')->with('carimage', $carimage);
    }

    /**
     * Show the form for editing the specified Carimage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carimage = $this->carimageRepository->find($id);

        if (empty($carimage)) {
            Flash::error('Carimage not found');

            return redirect(route('carimages.index'));
        }

        return view('carimages.edit')->with('carimage', $carimage);
    }

    /**
     * Update the specified Carimage in storage.
     *
     * @param int $id
     * @param UpdateCarimageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarimageRequest $request)
    {
        $carimage = $this->carimageRepository->find($id);

        if (empty($carimage)) {
            Flash::error('Carimage not found');

            return redirect(route('carimages.index'));
        }

        $carimage = $this->carimageRepository->update($request->all(), $id);

        Flash::success('Carimage updated successfully.');

        return redirect(route('carimages.index'));
    }

    /**
     * Remove the specified Carimage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carimage = $this->carimageRepository->find($id);

        if (empty($carimage)) {
            Flash::error('Carimage not found');

            return redirect(route('carimages.index'));
        }
        Storage::delete($carimage['images']);

      //  unlink(storage_path($carimage['images']));



        $this->carimageRepository->delete($id);

        Flash::success('Carimage deleted successfully.');

        return redirect(route('carimages.index'));
    }
}
