<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Repositories\ContratoRepository;

class ContratoController extends Controller implements ControllerInterface
{
    /** @var ContratoRepository */
    protected $contratoRepository;

    public function __construct(ContratoRepository $contratoRepository)
    {
        $this->contratoRepository = $contratoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->contratoRepository->all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paginate()
    {
        return $this->contratoRepository->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data = array_merge($request->all(), ['id_propriedade' => $id]);
        return $this->contratoRepository->create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->contratoRepository->find($id);
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
        return $this->contratoRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->contratoRepository->delete($id);
    }
}
