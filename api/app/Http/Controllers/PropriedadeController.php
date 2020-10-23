<?php

namespace App\Http\Controllers;

use App\Http\Requests\Propriedade;
use Repositories\PropriedadeRepository;

class PropriedadeController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Propriedade $request)
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
    public function update(Propriedade $request, $id)
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
