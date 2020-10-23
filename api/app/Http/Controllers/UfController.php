<?php

namespace App\Http\Controllers;

use App\Http\Requests\Uf;
use Repositories\UfRepository;

class UfController extends Controller
{
    /** @var UfRepository */
    protected $ufRepository;

    public function __construct(UfRepository $ufRepository)
    {
        $this->ufRepository = $ufRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->ufRepository->all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Uf $request)
    {
        return $this->ufRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->ufRepository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Uf $request, $id)
    {
        return $this->ufRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->ufRepository->delete($id);
    }
}
