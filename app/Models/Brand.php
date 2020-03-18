<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    protected $fillable = [
        'name', 'slug', 'short_description', 'description', 'is_featured', 'is_active', 'logo', 'meta_title', 'meta_description', 'meta_keywords', 'created_by', 'last_modified_by'
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean'
    ];
}
