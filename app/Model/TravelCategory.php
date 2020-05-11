<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TravelCategory extends Model
{
    protected $table = 'travel_category';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'parent_id',
        'is_trash',
    ];

}
