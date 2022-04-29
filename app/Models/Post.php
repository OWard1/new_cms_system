<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Example of Mutators and Accessors

    // Mutator
    // public function setPostImgaeAttribute($value)
    // {
    //     $this->attributes['post_imgae'] = asset($value);
    // }

    public function getPostImageAttribute($value)
    {
        return asset($value);
    }
}
