<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class follows extends Model
{
    use HasFactory;

    protected $fillable = [
        'following_user_id',
        'followed_user_id',
    ];

    public function following_user()
    {
        return $this->belongsTo(User::class, 'following_user_id');
    }

    public function followed_user()
    {
        return $this->belongsTo(User::class, 'followed_user_id');
    }
}
