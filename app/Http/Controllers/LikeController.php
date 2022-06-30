<?php

namespace App\Http\Controllers;

use App\Recipes;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggle($recipe_id)
    {
        $recipe = Recipes::findOrFail($recipe_id);
        $attr = ['user_id' => auth()->id()];

        if ($recipe->likes()->where($attr)->exists()) {
            $recipe->likes()->where($attr)->delete();
            $msg = ['status' => 'UNLIKE'];
        } else {
            $recipe->likes()->create($attr);
            $msg = ['status' => 'LIKE'];
        }

        return response()->json($msg);
    }
}
