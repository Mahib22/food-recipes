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
}
