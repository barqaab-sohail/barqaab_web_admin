<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['name', 'description', 'commencement_date', 'completion_date', 'project_cost', 'consultancy_cost', 'share', 'placement', 'status', 'project_type_id', 'project_client_id'];


    public function projectClient()
    {
        return $this->belongsTo(ProjectClient::class);
    }

    public function projectType()
    {
        return $this->belongsTo(ProjectType::class);
    }
}