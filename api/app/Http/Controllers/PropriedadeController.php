<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Repositories\PropriedadeRepository;

class PropriedadeController extends Controller implements ControllerInterface
{
    /** @var PropriedadeRepository */
    protected $propriedadeRepository;

    public function __construct(PropriedadeRepository $propriedadeRepository)
    {
        $this->propriedadeRepository = $propriedadeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->propriedadeRepository->all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paginate()
    {
        return $this->propriedadeRepository->paginate();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->propriedadeRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->propriedadeRepository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->propriedadeRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->propriedadeRepository->delete($id);
    }
}
