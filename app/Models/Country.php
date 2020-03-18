<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    protected $fillable = [
        'name', 'slug', 'iso_country_code', 'world_bank_country_code', 'flag', 'is_active', 'lat', 'lon', 'created_by', 'last_modified_by'
    ];

    protected $dates = ['deleted_at'];
}
