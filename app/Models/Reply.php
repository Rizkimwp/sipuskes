<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $table = 'replies';
    protected $guarded =['id'];

    public function complaint()
    {
        return $this->belongsTo(Complaint::class, "complaint_id");
    } 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
