<?php

namespace App\Http\Controllers;

use App\Traits\HasCRUD;

class ProductController extends Controller
{
    use HasCRUD;
    protected $model = 'App\Models\Product';

}
