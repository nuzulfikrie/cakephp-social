<?php
namespace Qobo\Social\Test\App\Config;

use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::connect('/users/login', ['controller' => 'Users', 'action' => 'login']);

Router::plugin(
    'Qobo/Social',
    ['path' => '/social'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
