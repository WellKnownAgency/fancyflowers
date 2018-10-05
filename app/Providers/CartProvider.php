<?php

namespace App\Providers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Session\SessionManager;
use Illuminate\Support\ServiceProvider;
use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;
use Gloudemans\Shoppingcart\CreateShoppingcartTable;

class CartProvider extends ShoppingcartServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $class_info = new \ReflectionClass($this);
        //$dir = dirname($class_info->getFileName() . '\..\config');
        $dir = dirname($class_info->getParentClass()->getFileName());
        //dd($dir);

        $this->app->bind('cart', 'App\Classes\Cart');

        $config = $dir . '/../config/cart.php';
        $this->mergeConfigFrom($config, 'cart');

        //dd($dir);

        $this->publishes([$dir . '/../config/cart.php' => config_path('cart.php')], 'config');

        $this->app['events']->listen(Logout::class, function () {
            if ($this->app['config']->get('cart.destroy_on_logout')) {
                $this->app->make(SessionManager::class)->forget('cart');
            }
        });

        if ( ! class_exists('CreateShoppingcartTable')) {
            // Publish the migration
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                $dir.'/../database/migrations/0000_00_00_000000_create_shoppingcart_table.php' => database_path('migrations/'.$timestamp.'_create_shoppingcart_table.php'),
            ], 'migrations');
        }
    }
}
