<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class directores extends Model
{
    protected $fillable = ['nombre','img'];
    public $timestamps = false;
}
