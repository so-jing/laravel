<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AdminRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
//            $router->auth();
//            $router->get('/', ['as' => 'admin', 'uses' => 'IndexController@index']);
            $router->get('admin',['uses'=>'IndexController@index']);
        });
    }
}