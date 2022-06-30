<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = ['recipes_id', 'user_id'];
}
