<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{

    protected $fillable = ['name', 'designation', 'description', 'picture', 'placement', 'status'];
}