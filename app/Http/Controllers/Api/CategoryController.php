<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //index
    public function index(Request $request)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return response()->json(['status' => 'success', 'data' => $categories], 200);
    }
}
