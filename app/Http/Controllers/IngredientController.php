<?php


namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function show($id)
    {
        $ingredient = Ingredient::with('dishes')->findOrFail($id);
        return view('ingredients.show', compact('ingredient'));
    }
}
