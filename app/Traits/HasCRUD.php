<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait HasCRUD
{
    public function index(Request $params)
    {
        //TODO: url with parameters
        //TODO: integrate pagination
        //TODO: integrate filter
        //TODO: integrate sort by
        return $this->model::all();
    }

    public function show($id)
    {
        return $this->model::findOrFail($id);
    }

    public function store(Request $request)
    {
        $model = new $this->model();
        //TODO: mettre le bloc suivant dans un service "save"
        $model->fill($request->all());
        if($model->validate($model))
        {
            $model->save();
            return $model;
        }else {
            return $model->errors();
        }
    }

    public function update(Request $request, $id)
    {
        $model = $this->model::findOrFail($id);
        //TODO: mettre le bloc suivant dans un service "save"
        $model->fill($request->all());
        if ($model->validate($model)) {
            $model->save();
            return $model;
        } else {
            return $model->errors();
        }
    }

    public function delete($id)
    {
        $model = $this->model::findOrFail($id);
        return $model->delete();
    }
}