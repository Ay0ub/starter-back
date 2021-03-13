<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait HasCRUDController
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
        $this->validation($model);
        $model->save();
        return $model;
        
    }

    public function update(Request $request, $id)
    {
        $model = $this->model::findOrFail($id);
        //TODO: mettre le bloc suivant dans un service "save"
        $model->fill($request->all());
        $this->validation($model);
        $model->save();
        return $model;
    }

    public function delete($id)
    {
        $model = $this->model::findOrFail($id);
        return $model->delete();
    }

    public function validation($model)
    {
        if(isset($model->rules))
        {
            // make a new validator object
            $v = Validator::make($model->toArray(),$model->rules);
    
            // check for failure
            if ($v->fails()) {
                // set errors and return false
                throw new Exception($v->errors(), 500);
            }
        }
    }
}