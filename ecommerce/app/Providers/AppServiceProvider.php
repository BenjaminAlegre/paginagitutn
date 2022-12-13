<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('verificar_apellido', function($usuario){
            return $usuario->apellido == 'Escobar';
        });

        Gate::define('puede_crear_tecnicos', function($usuario){
            return $usuario->apellido == 'Escobarrrrrrrrrr';
        });

        Gate::define('puede_crear_usuarios', function($usuario){
            $rol = $usuario->rol;

            $puedeHacerlo = false;

            switch ($rol) {
                case "ADMIN": $puedeHacerlo = true; break;
                case "DOCENTE": $puedeHacerlo = false; break;
            }

            return $puedeHacerlo;
        });
    }
}
