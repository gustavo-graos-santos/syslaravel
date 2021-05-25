<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Administrador', function ($user) {

            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            if ($nivel == '1'){
               return true;
            }

           return false;

        });

        Gate::define('Cliente', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            if ($nivel == '2'){
               return true;
            }

           return false;

        });

        Gate::define('Vendedor', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            if ($nivel == '3'){
               return true;
            }

           return false;

        });

        Gate::define('Proovedor', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            if ($nivel == '4'){
               return true;
            }

           return false;

        });

        Gate::define('Contador', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            if ($nivel == '5'){
               return true;
            }

           return false;

        });

        Gate::define('Controlador', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            if ($nivel == '6'){
               return true;
            }

           return false;

        });

        Gate::define('Supervisor', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            if ($nivel == '7'){
               return true;
            }

           return false;

        });

    }
}
