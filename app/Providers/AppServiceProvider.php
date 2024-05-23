<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Ambil data pengguna terbaru
        $latestUser = User::latest()->first();

        // Pastikan ada pengguna terbaru sebelum melewatinya ke tampilan
        if ($latestUser) {
            $latestRegisteredName = $latestUser->name; // Misalnya, Anda mengambil nama pengguna
        } else {
            $latestRegisteredName = "No user registered yet"; // Jika tidak ada pengguna terdaftar
        }
        view()->share('latestRegisteredName', $latestRegisteredName);
        Paginator::useBootstrapFive();
    }
}
