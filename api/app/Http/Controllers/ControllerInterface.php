<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface ControllerInterface
{
    public function index();
    public function paginate();
    public function show($id);
    public function update(Request $request, $id);
    public function destroy($id);
}
