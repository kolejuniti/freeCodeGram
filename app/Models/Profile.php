<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function ProfileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/apfzNiEyAlKrjqW6TMFdIw5UEnVCUgS4bA6dEzXx.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
