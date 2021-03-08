<?php

namespace App\Http\Controllers;

use App\Traits\HasCRUD;

class PersonController extends Controller
{
    use HasCRUD;
    protected $model = 'App\Models\Person';

}
