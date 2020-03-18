<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    protected $fillable = [
        'country_id', 'name', 'slug', 'code', 'is_active', 'lat', 'lon', 'created_by', 'last_modified_by'
    ];

    protected $dates = ['deleted_at'];

}
