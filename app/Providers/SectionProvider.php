<?php

namespace App\Providers;
use App\sections\SectionManager;

use App\section;

use Illuminate\Support\ServiceProvider;

class SectionProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SectionManager::class, function () {
            // return new SectionManager();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
