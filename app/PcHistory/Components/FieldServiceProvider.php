<?php
/**
 * Created by PhpStorm.
 * User: Aikon
 * Date: 23/05/14
 * Time: 23:33
 */

namespace PcHistory\Components;

use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['field']= $this->app->share(function($app){
            $fieldBuilder = new FieldBuilder($app['form'],$app['view'],$app['session.store']);
            return $fieldBuilder;
        });

    }


} 