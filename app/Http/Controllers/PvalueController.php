<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePvalueRequest;
use App\Http\Requests\UpdatePvalueRequest;
use App\Repositories\PvalueRepository;
use App\Repositories\ProducttypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Producttype;
use Flash;
use Response;

class PvalueController extends AppBaseController
{
    /** @var PvalueRepository $pvalueRepository*/
    private $pvalueRepository;
    private $ProducttypeRepository;

    public function __construct(PvalueRepository $pvalueRepo,ProducttypeRepository $PtypeRepo )
    {
        $this->pvalueRepository = $pvalueRepo;
        $this->ProducttypeRepository = $PtypeRepo;
    }

    /**
     * Display a listing of the Pvalue.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pvalues = $this->pvalueRepository->all();

        return view('pvalues.index')
            ->with('pvalues', $pvalues);
    }

    /**
     * Show the form for creating a new Pvalue.
     *
     * @return Response
     */
    public function create()
    {
        $ptypes = Producttype::pluck('name', 'id');
        return view('pvalues.create')->with('ptypes',$ptypes);
    }

    /**
     * Store a newly created Pvalue in storage.
     *
     * @param CreatePvalueRequest $request
     *
     * @return Response
     */
    public function store(CreatePvalueRequest $request)
    {
        $input = $request->all();

        $pvalue = $this->pvalueRepository->create($input);

        Flash::success('Pvalue saved successfully.');

        return redirect(route('pvalues.index'));
    }

    /**
     * Display the specified Pvalue.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pvalue = $this->pvalueRepository->find($id);

        if (empty($pvalue)) {
            Flash::error('Pvalue not found');

            return redirect(route('pvalues.index'));
        }

        return view('pvalues.show')->with('pvalue', $pvalue);
    }

    /**
     * Show the form for editing the specified Pvalue.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pvalue = $this->pvalueRepository->find($id);

        if (empty($pvalue)) {
            Flash::error('Pvalue not found');

            return redirect(route('pvalues.index'));
        }

        return view('pvalues.edit')->with('pvalue', $pvalue);
    }

    /**
     * Update the specified Pvalue in storage.
     *
     * @param int $id
     * @param UpdatePvalueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePvalueRequest $request)
    {
        $pvalue = $this->pvalueRepository->find($id);

        if (empty($pvalue)) {
            Flash::error('Pvalue not found');

            return redirect(route('pvalues.index'));
        }

        $pvalue = $this->pvalueRepository->update($request->all(), $id);

        Flash::success('Pvalue updated successfully.');

        return redirect(route('pvalues.index'));
    }

    /**
     * Remove the specified Pvalue from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pvalue = $this->pvalueRepository->find($id);

        if (empty($pvalue)) {
            Flash::error('Pvalue not found');

            return redirect(route('pvalues.index'));
        }

        $this->pvalueRepository->delete($id);

        Flash::success('Pvalue deleted successfully.');

        return redirect(route('pvalues.index'));
    }
}
