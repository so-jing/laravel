<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class HomeRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
//            $router->auth();
            $router->get('/', ['as' => 'home', 'uses' => 'IndexController@index']);
        });
    }
}