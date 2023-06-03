<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProducttypeRequest;
use App\Http\Requests\UpdateProducttypeRequest;
use App\Repositories\ProducttypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProducttypeController extends AppBaseController
{
    /** @var ProducttypeRepository $producttypeRepository*/
    private $producttypeRepository;

    public function __construct(ProducttypeRepository $producttypeRepo)
    {
        $this->producttypeRepository = $producttypeRepo;
    }

    /**
     * Display a listing of the Producttype.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $producttypes = $this->producttypeRepository->all();

        return view('producttypes.index')
            ->with('producttypes', $producttypes);
    }

    /**
     * Show the form for creating a new Producttype.
     *
     * @return Response
     */
    public function create()
    {
        return view('producttypes.create');
    }

    /**
     * Store a newly created Producttype in storage.
     *
     * @param CreateProducttypeRequest $request
     *
     * @return Response
     */
    public function store(CreateProducttypeRequest $request)
    {
        $input = $request->all();

        $producttype = $this->producttypeRepository->create($input);

        Flash::success('Producttype saved successfully.');

        return redirect(route('producttypes.index'));
    }

    /**
     * Display the specified Producttype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $producttype = $this->producttypeRepository->find($id);

        if (empty($producttype)) {
            Flash::error('Producttype not found');

            return redirect(route('producttypes.index'));
        }

        return view('producttypes.show')->with('producttype', $producttype);
    }

    /**
     * Show the form for editing the specified Producttype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $producttype = $this->producttypeRepository->find($id);

        if (empty($producttype)) {
            Flash::error('Producttype not found');

            return redirect(route('producttypes.index'));
        }

        return view('producttypes.edit')->with('producttype', $producttype);
    }

    /**
     * Update the specified Producttype in storage.
     *
     * @param int $id
     * @param UpdateProducttypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProducttypeRequest $request)
    {
        $producttype = $this->producttypeRepository->find($id);

        if (empty($producttype)) {
            Flash::error('Producttype not found');

            return redirect(route('producttypes.index'));
        }

        $producttype = $this->producttypeRepository->update($request->all(), $id);

        Flash::success('Producttype updated successfully.');

        return redirect(route('producttypes.index'));
    }

    /**
     * Remove the specified Producttype from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $producttype = $this->producttypeRepository->find($id);

        if (empty($producttype)) {
            Flash::error('Producttype not found');

            return redirect(route('producttypes.index'));
        }

        $this->producttypeRepository->delete($id);

        Flash::success('Producttype deleted successfully.');

        return redirect(route('producttypes.index'));
    }
}
