<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait HasCRUD
{
    public function index(Request $params)
    {
        return $this->model::all();
    }

    public function show($id)
    {
        return $this->model::findOrFail($id);
    }

    public function store(Request $request)
    {
        $model = new $this->model();
        $model->create($request->all());
        return $model;
    }

    public function update(Request $request, $id)
    {
        $model = $this->model::find($id);
        $model->update($request->all());
        return $model;
    }

    public function delete($id)
    {
        $model = $this->model::find($id);
        return $model->delete();
    }
}