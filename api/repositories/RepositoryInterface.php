<?php

namespace Repositories;

interface RepositoryInterface
{
    public function all();
    public function find($id);
    public function create($data);
    public function update($data, $id);
    public function delete($id);
}
