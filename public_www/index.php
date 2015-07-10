<?php
    require_once( '../application/init.php' );
    require_once( '../application/logic/cls.Router.php' );
    use Orion\Router\Router as Router;
    use Orion\Translator\Translate as Translate;


    $translate = new Translate( 'EN' );
    $router = new Router();
    $router->route( $_SERVER['REQUEST_URI'] );
