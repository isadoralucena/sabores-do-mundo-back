<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
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
        $recipes = Recipe::with('user')->paginate(10);
        return view('dashboard', compact('recipes'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        $recipes = Recipe::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('title', 'like', '%' . $query . '%')
                        ->orWhereHas('user', function ($userQuery) use ($query) {
                            $userQuery->where('name', 'like', '%' . $query . '%');
                        })
                        ->orWhere('country', 'like', '%' . $query . '%');
        })->distinct()->paginate(10);

        return view('dashboard', compact('recipes', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'instructions' => 'required|string',
            'country' => 'required|string|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
        } else {
            $path = null;
        }

        $recipe = new Recipe();
        $recipe->user_id = Auth::id();
        $recipe->title = $request->input('title');
        $recipe->instructions = $request->input('instructions');
        $recipe->country = $request->input('country');
        $recipe->photo_path = str_replace('public/', '', $path);

        $recipe->save();

        return redirect()->route('dashboard')->with('success', 'Receita cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $recipe = Recipe::with('user')->find($id);

        return view('recipe.show', compact('recipe'));
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
