<?php

namespace App\Models;

use App\Traits\RulesAccessor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,
        SoftDeletes,
        RulesAccessor;

    protected $fillable = [
        'name',
        'color',
        'price',
    ];

    protected $rules = [
        'name'  =>  'required|unique:products',
        'color' =>  'required|regex:^#(?:[0-9a-fA-F]{3}){1,2}$^',
        'price' =>  'required|numeric'
    ];

}
