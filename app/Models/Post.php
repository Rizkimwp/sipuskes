<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'posts'; 
    protected $fillable = [ 
        'judul',
        'body',
        'excerpt',
        'category_id', 
        'user_id', 
        'slug', 
    'image'


    ];

    public function categori()
    {
        return $this->belongsTo(Category::class, "category_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
