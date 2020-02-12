<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
