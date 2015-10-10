<?php

namespace App\Providers;

use App\Database\Migrations;
use App\Database\Seeds;
use Jumilla\Versionia\Laravel\Support\DatabaseServiceProvider as ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->migrations('framework', [
            '1.0' => Migrations\Framework_1_0::class,
        ]);

        $this->migrations('app', [
            '1.0' => Migrations\App_1_0::class,
        ]);

        $this->seeds([
            'test' => Seeds\Test::class,
        ], 'test');
    }
}
