<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Pelouro;
use App\Projecto;
use App\Area;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $pelouros  = Pelouro::all();
        $projectos = Projecto::all();
        $areas     = Area::all();
        View::share(['pelouros' => $pelouros, 'projectos' =>$projectos, 'areas' => $areas]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
