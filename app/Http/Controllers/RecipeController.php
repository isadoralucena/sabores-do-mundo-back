<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestRecipes = Recipe::latest()->with('user')->take(3)->get();
        return view('welcome', ['latestRecipes' => $latestRecipes]);
    }

    public function dashboard()
    {
        $recipes = Recipe::with('user')->paginate(5);
        return view('dashboard', compact('recipes'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $recipes = Recipe::where('title', 'like', '%' . $query . '%')->get();
        return view('search_results', compact('recipes', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $recipe = Recipe::with('user')->find($id);

        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}