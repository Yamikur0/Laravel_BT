<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class CategoriesController extends Controller
{
    public function categories(){
        
        $categories = Categories::paginate(10);
        return view('categories', ['categories' => $categories]);
    }
}