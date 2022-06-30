<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    //
    protected $fillable = ['title', 'description', 'material', 'step', 'img', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isLiked()
    {
        return $this->likes->where('user_id', auth()->id())->count();
    }
}
