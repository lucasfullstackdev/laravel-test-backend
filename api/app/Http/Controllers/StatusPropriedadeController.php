<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusPropriedade;
use Repositories\StatusPropriedadeRepository;

class StatusPropriedadeController extends Controller
{
    /** @var StatusPropriedadeRepository */
    protected $statusPropriedadeRepository;

    public function __construct(StatusPropriedadeRepository $statusPropriedadeRepository)
    {
        $this->statusPropriedadeRepository = $statusPropriedadeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->statusPropriedadeRepository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusPropriedade $request)
    {
        return $this->statusPropriedadeRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->statusPropriedadeRepository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StatusPropriedade $request, $id)
    {
        return $this->statusPropriedadeRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->statusPropriedadeRepository->delete($id);
    }
}
