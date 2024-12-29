<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class ProjectClient extends Model
{
    protected $fillable = ['name', 'short_name', 'mono'];
}