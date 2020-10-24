<?php

namespace Repositories;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

/**
 * Classe usada como base para os Repository
 */
abstract class BaseRepository
{
    protected $storeRules;

    public final function all()
    {
        try {
            $all = $this->class::all();
            return Response::success($all, 'Registro encontrado!');
        } catch (\Throwable $th) {
            return Response::error($th, $th->getMessage());
        }
    }

    public final function find($id)
    {
        try {
            $finded = $this->class::find($id);
            return Response::success($finded, 'Registro encontrado!');
        } catch (\Throwable $th) {
            return Response::error($th, $th->getMessage());
        }
    }

    public final function create($data)
    {
        $validator = Validator::make($data, $this->storeRules);

        if ($validator->fails())
            return Response::error($data, $validator->errors());

        try {
            $created = $this->class::create($data);

            if (isset($this->storeMailable))
                Mail::to('lucas201293@gmail.com')->queue(new $this->storeMailable());

            return Response::success($created, 'Registro gravado com sucesso!', 201);
        } catch (\Throwable $th) {
            return Response::error($data, $th->getMessage());
        }
    }

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

    public final function delete($id)
    {
        try {
            $remove = $this->class::find($id);
            $remove->delete();

            if (isset($this->removeMailable)) {
                Mail::to('lucas201293@gmail.com')->queue(new $this->removeMailable($remove));
            }

            return Response::success($remove, 'Registro removido com sucesso!');
        } catch (\Throwable $th) {
            return Response::error($id, $th->getMessage());
        }
    }

    protected final function setStoreRules($storeRules)
    {
        $this->storeRules = $storeRules;
    }
}
