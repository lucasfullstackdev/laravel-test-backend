<?php

namespace Repositories;

/**
 * Classe usada como base para os Repository
 */
abstract class BaseRepository
{

    public final function all()
    {
        return $this->class::all();
    }

    public final function find($id)
    {
        return $this->class::find($id);
    }

    public final function create($data)
    {
        return $this->class::create($data);
    }

    public final function update($data, $id)
    {
        return $this->class::find($id)->update($data);
    }

    public final function delete($id)
    {
        return $this->class::find($id)->delete();
    }
}
