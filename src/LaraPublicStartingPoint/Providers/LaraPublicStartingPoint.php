<?php

namespace CodePress\CodeCategory\Providers;


use Illuminate\Support\ServiceProvider;

class CodeCategoryServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->publishes([__DIR__.'../../resources/migrations'=> base_path('database/migrations')], 'migrations');
        $this->publishes([__DIR__.'Commands'=> base_path('app/Commands')]);
        $this->publishes([__DIR__.'Controllers'=> base_path('app/Http/Controllers')]);
        $this->publishes([__DIR__.'../../resources/assets'=> base_path('resources/assets')]);
        $this->publishes([__DIR__.'../../resources/public' => public_path(),], 'public');
        $this->publishes([__DIR__.'../../resources/.bowerrc'=> base_path()]);
        $this->publishes([__DIR__.'../../resources/bower.json'=> base_path()]);
        $this->publishes([__DIR__.'../../resources/gulpfile.js'=> base_path()]);
        $this->publishes([__DIR__.'../../resources/package.json'=> base_path()]);

        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../../routes.php';
        }
    }

    public function register()
    {

    }
}