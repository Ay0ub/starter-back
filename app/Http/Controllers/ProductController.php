<?php

namespace App\Http\Controllers;

use App\Traits\HasCRUD;

class ProductController extends Controller
{
    protected $model = 'App\Models\Product';
    use HasCRUD;
}
