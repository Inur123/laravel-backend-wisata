<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Count total number of users

        $userTotal = DB::table('users')->count();
        $categoryTotal = DB::table('categories')->count();
        $productTotal = DB::table('products')->count();

        // Pass data to the view
        return view('pages.dashboard', compact('userTotal', 'categoryTotal', 'productTotal'));
    }
}
