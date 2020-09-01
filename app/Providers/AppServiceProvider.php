<?php

namespace App\Providers;

use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('MAIN MENU');

            $event->menu->add([
                'text' => 'Home',
                'url' => route('home'),
                'icon' => 'fa fa-home',
            ]);

            $event->menu->add([
                'text' => 'Add User',
                'url' => route('user.create'),
                'icon' => 'fas fa-fw fa-user',
            ]);

        });
    }
}
