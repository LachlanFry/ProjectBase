<?php
/**
 * Created by PhpStorm.
 * User: lachiefry
 * Date: 13/2/17
 * Time: 10:59 PM
 * Docs: http://bulletphp.com/docs/
 */

require_once "autoload.php";

$app = new Bullet\App();

$app->path('posts', function($request) use($app) {
    
    $app->get(function($request) use($app) {

    });

    $app->post(function($request) use($app) {

    });

    $app->delete(function($request) use($app) {

    });
});

$app->run(new Bullet\Request());