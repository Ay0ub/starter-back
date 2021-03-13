<?php

namespace App\Http\Controllers;

use App\Traits\HasCRUDController;

class ProductController extends Controller
{
    use HasCRUDController;
    protected $model = 'App\Models\Product';

}
