<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Str;
use App\Recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recipes = Recipes::all()->SortByDesc('created_at');
        return view('home', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = auth()->user();

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'materials.*' => 'required',
            'steps.*' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $randomString = strtolower(Str::random(5));
        $slugTitle = Str::of($request->title)->slug('-');
        $slug = $slugTitle . '-' . $randomString;

        $imageName = $slug . '.' . $request->img->extension();
        $request->img->move(public_path('img/recipes'), $imageName);

        $user->recipes()->create([
            'title' => $request->title,
            'description' => $request->description,
            'material' => json_encode($request->materials),
            'step' => json_encode($request->steps),
            'img' => $imageName,
            'slug' => $slug
        ]);

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $item = Recipes::where('slug', $slug)->first();
        return view('detail', compact('item'));
    }
}
