<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;

trait HasValidator
{
    protected $errors;

    public function validate($data)
    {
        // make a new validator object
        $v = Validator::make($data->attributes, $this->rules);

        // check for failure
        if ($v->fails()) {
            // set errors and return false
            $this->errors = $v->errors();
            return false;
        }

        // validation pass
        return true;
    }

    public function errors()
    {
        return $this->errors;
    }
}