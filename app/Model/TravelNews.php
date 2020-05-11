<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TravelNews extends Model
{
    protected $table = 'travel_news';

    protected $fillable = [
        'news_id',
        'title',
        'intro',
        'category_id',
        'is_trash',
        'status',
        'content',
        'user_id',
        'status',
        'created_at',
    ];

    
}
