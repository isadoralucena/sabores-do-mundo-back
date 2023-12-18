<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Recipe;

class UserRecipesController extends Controller
{

    public function index()
    {
        $userRecipes = Recipe::where('user_id', Auth::id())->paginate(10);
        return view('user.recipes', ['recipes' => $userRecipes]);
    }

    public function edit(Request $request){
        $recipe = Recipe::find($request->id);
        return view('user.editRecipe', ['recipe' => $recipe]);
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'instructions' => 'required|string',
            'country' => 'required|string|max:255',
        ]);

        $recipe = Recipe::find($request->id);
        $recipe->title = $request->input('title');
        $recipe->instructions = $request->input('instructions');
        $recipe->country = $request->input('country');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $recipe->photo_path = str_replace('public/', '', $path);
        }


        $recipe->save();

        return redirect()->route('user.recipes');
    }
}
