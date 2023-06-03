<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarmasterRequest;
use App\Http\Requests\UpdateCarmasterRequest;
use App\Repositories\CarmasterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CarmasterController extends AppBaseController
{
    /** @var CarmasterRepository $carmasterRepository*/
    private $carmasterRepository;

    public function __construct(CarmasterRepository $carmasterRepo)
    {
        $this->carmasterRepository = $carmasterRepo;
    }

    /**
     * Display a listing of the Carmaster.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $carmasters = $this->carmasterRepository->all();

        return view('carmasters.index')
            ->with('carmasters', $carmasters);
    }

    /**
     * Show the form for creating a new Carmaster.
     *
     * @return Response
     */
    public function create()
    {
        return view('carmasters.create');
    }

    /**
     * Store a newly created Carmaster in storage.
     *
     * @param CreateCarmasterRequest $request
     *
     * @return Response
     */
    public function store(CreateCarmasterRequest $request)
    {
        $input = $request->all();

        $carmaster = $this->carmasterRepository->create($input);

        Flash::success('Carmaster saved successfully.');

        return redirect(route('carmasters.index'));
    }

    /**
     * Display the specified Carmaster.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carmaster = $this->carmasterRepository->find($id);

        if (empty($carmaster)) {
            Flash::error('Carmaster not found');

            return redirect(route('carmasters.index'));
        }

        return view('carmasters.show')->with('carmaster', $carmaster);
    }

    /**
     * Show the form for editing the specified Carmaster.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carmaster = $this->carmasterRepository->find($id);

        if (empty($carmaster)) {
            Flash::error('Carmaster not found');

            return redirect(route('carmasters.index'));
        }

        return view('carmasters.edit')->with('carmaster', $carmaster);
    }

    /**
     * Update the specified Carmaster in storage.
     *
     * @param int $id
     * @param UpdateCarmasterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarmasterRequest $request)
    {
        $carmaster = $this->carmasterRepository->find($id);

        if (empty($carmaster)) {
            Flash::error('Carmaster not found');

            return redirect(route('carmasters.index'));
        }

        $carmaster = $this->carmasterRepository->update($request->all(), $id);

        Flash::success('Carmaster updated successfully.');

        return redirect(route('carmasters.index'));
    }

    /**
     * Remove the specified Carmaster from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carmaster = $this->carmasterRepository->find($id);

        if (empty($carmaster)) {
            Flash::error('Carmaster not found');

            return redirect(route('carmasters.index'));
        }

        $this->carmasterRepository->delete($id);

        Flash::success('Carmaster deleted successfully.');

        return redirect(route('carmasters.index'));
    }
}
