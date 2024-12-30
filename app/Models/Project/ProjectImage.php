<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = ['image', 'placement', 'status', 'project_id'];

    public function project()
    {

        return $this->belongsTo(Project::class);
    }
}
