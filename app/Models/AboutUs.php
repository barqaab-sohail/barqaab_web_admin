<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = ['description', 'mono', 'organization_chart', 'google_map', 'address', 'phone', 'fax', 'email'];
}