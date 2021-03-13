<?php

namespace App\Models;

use App\Traits\RulesAccessor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory,
        SoftDeletes,
        RulesAccessor;

    protected $table= 'persons';

    protected $fillable=[
        'firstName',
        'lastName',
        'email',
        'phone',
    ];

    protected $rules = [
        'firstName' =>  'required',
        'lastName'  =>  'required',
        'email'     =>  'required|email|unique:persons',
        'phone'     =>  'regex:^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$^',
    ];

}
