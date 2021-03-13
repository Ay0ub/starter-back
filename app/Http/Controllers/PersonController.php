<?php

namespace App\Http\Controllers;

use App\Traits\HasCRUDController;

class PersonController extends Controller
{
    use HasCRUDController;
    protected $model = 'App\Models\Person';

}
