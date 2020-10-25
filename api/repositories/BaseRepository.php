<?php

namespace Repositories;

use Illuminate\Support\Facades\Validator;

/**
 * Classe usada como base para os Repository
 */
abstract class BaseRepository
{
    protected $storeRules;
    protected $with;

    /**
     * Paginando entre os recursos
     *
     * @return Repositories\Response
     */
    public final function paginate()
    {
        try {
            if (isset($this->with)) {
                $this->class = $this->class::with($this->with);
            }
            
            $all = gettype($this->class) == 'string' ? $this->class::paginate() : $this->class->paginate();
            return Response::success($all, 'Registro encontrado!');
        } catch (\Throwable $th) {
            return Response::error($th, $th->getMessage());
        }
    }

    /**
     * Retornando todos os recursos
     *
     * @return \Repositories\Response
     */
    public final function all()
    {
        try {
            if (isset($this->with)) {
                $this->class = $this->class::with($this->with);
            }

            $all = gettype($this->class) == 'string' ? $this->class::get() : $this->class->get();
            return Response::success($all, 'Registro encontrado!');
        } catch (\Throwable $th) {
            return Response::error($th, $th->getMessage());
        }
    }

    /**
     * Retornando recurso específico
     *
     * @return \Repositories\Response
     */
    public final function find($id)
    {
        try {
            if (isset($this->with)) {
                $this->class = $this->class::with($this->with);
            }

            $finded = gettype($this->class) == 'string' ? $this->class::find($id) : $this->class->find($id);
            return Response::success($finded, 'Registro encontrado!');
        } catch (\Throwable $th) {
            return Response::error($th, $th->getMessage());
        }
    }

    /**
     * Criando recurso
     *
     * @return \Repositories\Response
     */
    public final function create($data)
    {
        $validator = Validator::make($data, $this->storeRules);

        if ($validator->fails())
            return Response::error($data, $validator->errors());

        try {
            $created = $this->class::create($data);
            return Response::success($created, 'Registro gravado com sucesso!', 201);
        } catch (\Throwable $th) {
            return Response::error($data, $th->getMessage());
        }
    }

    /**
     * Atualizando recurso
     *
     * @return \Repositories\Response
     */
    public final function update($data, $id)
    {
        $updateRules = $this->updateRules ?? $this->storeRules;
        $validator = Validator::make($data, $updateRules);

        if ($validator->fails())
            return Response::error($data, $validator->errors());

        try {
            $finded = $this->class::find($id);
            $finded->update($data);

            return Response::success($finded, 'Registro atualizado com sucesso!');
        } catch (\Throwable $th) {
            return Response::error($data, $th->getMessage());
        }
    }

    /**
     * Removendo recurso
     *
     * @return \Repositories\Response
     */
    public final function delete($id)
    {
        return $this->class::find($id)->delete();
    }

    /**
     * Setando regras para validação das requisições
     *
     * @return Repositories\Response
     */
    protected final function setStoreRules($storeRules)
    {
        $this->storeRules = $storeRules;
    }

    /**
     * Setando relacionamentos
     *
     * @return Repositories\Response
     */
    public final function with($with)
    {
        $this->with = $with;
        return $this;
    }
}
