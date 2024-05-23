<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        // Count total number of users
        $latestUser = User::latest()->first();

        // Pastikan ada pengguna terbaru sebelum melewatinya ke tampilan
        if ($latestUser) {
            $latestRegisteredName = $latestUser->name; // Misalnya, Anda mengambil nama pengguna
        } else {
            $latestRegisteredName = "No user registered yet"; // Jika tidak ada pengguna terdaftar
        }

        $users = User::all();
        $userTotal = DB::table('users')->count();
        $categoryTotal = DB::table('categories')->count();
        $productTotal = DB::table('products')->count();

        // Pass data to the view
        return view('pages.dashboard', compact('userTotal', 'categoryTotal', 'productTotal', 'users', 'latestRegisteredName'));
    }
}
