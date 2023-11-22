<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homes'; 

    protected $fillable = ['judul', 'body', 'image', 'user_id']; 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
