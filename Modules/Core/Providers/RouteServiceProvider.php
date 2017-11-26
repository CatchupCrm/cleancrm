<?php

namespace Modules\Core\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Modules\Core\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the module.
     *
     * @return void
     */
    public function map()
    {
        $this->mapFrontendRoutes();
        $this->mapAdminRoutes();
        $this->mapStaffRoutes();
        $this->mapApiRoutes();
    }


    /**
     * Define the "web" routes for the module.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapFrontendRoutes()
    {
        Route::group([
            //'middleware' => 'staff',
          'namespace' => $this->namespace,
        ], function ($router) {
            require(__DIR__ . '/../Routes/frontendRoutes.php');
        });
    }

    /**
     * Define the "web" routes for the module.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            //'middleware' => 'staff',
          'namespace' => $this->namespace,
        ], function ($router) {
            require(__DIR__ . '/../Routes/adminRoutes.php');
        });
    }

    /**
     * Define the "web" routes for the module.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapStaffRoutes()
    {
        Route::group([
            //'middleware' => 'staff',
          'namespace' => $this->namespace,
        ], function ($router) {
            require(__DIR__ . '/../Routes/staffRoutes.php');
        });
    }

    /**
     * Define the "api" routes for the module.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            //'middleware' => 'api',
          'namespace' => $this->namespace,
          'prefix' => 'api',
        ], function ($router) {
            require(__DIR__ . '/../Routes/apiRoutes.php');
        });
    }
}
