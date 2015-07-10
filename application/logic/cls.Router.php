<?php
    namespace Orion\Router;
    use Orion\Controller\Controller04 as Controller04;
    use Orion\ErrorHandler\ErrorHandler as ErrorHandler;

    /**
     * Class Router
     * @package Orion\Router
     */
    class Router {
        private $routing_table = [];
        /**  */
        public function __construct() {
            /** Import our routing table array and store it in our $routing_table member */
            include( VIEWS."routing_table.php" );
            /** $routes is defined in the routing_table.php file */
            $this->routing_table = $routes;
        }

        /** @param string $route */
        public function route( $route ) {
            /******************************************************************************************
             * Take our $route ($_SERVER['REQUEST_URI']) and strip it, & count the number of elements *
             * (the first will be the controller, the second will be the view to be loaded (as a      *
             * method belonging to the controller class) and any parameters to be passed (which will  *
             * be all elements beyond the second). If there is no view, then fall back on the con-    *
             * troller's index() view.                                                                *
             *****************************************************************************************/
            $nodes = explode( "/" , $route );

            if( $nodes[0] == "" ) { array_shift( $nodes ); }
            $count = count( $nodes );
            if( $nodes[$count-1] == "" ) { array_pop( $nodes ); }
            if( ! $nodes ) {
                /** Defaults to the homepage if no route is given in the URL */
                include( CTRLS . 'ctrl.Controller04.php' );
                $ctrl = new Controller04();
                $ctrl->index();
            } else {
                $depth = count( $nodes );
                $ctrl = $nodes[0];
                /** Include the class file for the route, found by looking in the routing table. */
                /** @noinspection PhpIncludeInspection */
                if( array_key_exists( $ctrl , $this->routing_table ) && file_exists( CTRLS . $this->routing_table[$ctrl][0] ) ) {
                    include( CTRLS . $this->routing_table[$ctrl][0] );
                    $class = $this->routing_table[$ctrl][1];
                    $controller = new $class();
                    /** Check if there is a given method in the URL; if not, default to index */
                    if( isset( $nodes[1] ) && method_exists( $controller , $nodes[1] ) ) {
                        $mthd = $nodes[1];
                        array_slice( $nodes , ( -$depth + 1 ) );
                        /** Check for any url parameters to be passed to method and call method accordingly */
                        if ( count( $nodes ) ) {
                            call_user_func_array( array( $controller , $mthd ), $nodes );
                        } else {
                            call_user_func( array( $controller , $mthd ) );
                        }
                    } else {
                        call_user_func( array( $controller , 'index' ) );
                    }
                } else {
                    /** We cannot find a route for this URL. It does not exist! */
                    //ErrorHandler::handle( 2005 );
                }
            }
        }

        /**
         * @param string $controller
         * @param string $method
         * @return string (The navigation path)
         */
        public function go( $controller = null , $method = null ) {
            if( $controller && ! $method ) {
                /** To execute if only one parameter is passed - assumes Controller and is taken to that Controller's index() */
                echo ( array_key_exists( $controller , $this->routing_table ) ) ? ROOT . "/" . $controller . "/" : ROOT . "/home/";
            } elseif( $controller && $method ) {
                /** To execute if both parameters are passed - Navigates to specified Controller and Method */
                /** If both the controller and the method specified match a record in the routing table, return that path */
                if ( ( array_key_exists( $controller , $this->routing_table ) ) && ( method_exists( $this->routing_table[$controller][1] , $method ) ) ) {
                    echo ROOT . "/" . $controller . "/" . $method . "/";
                } else {
                    echo ( array_key_exists( $controller , $this->routing_table ) ) ? ROOT . "/" . $controller : ROOT . "/home/";
                }
            } else {
                /** To execute if go() is ran with no parameters. Defaults to homepage. */
                echo ROOT . '/home/';
            }
        }
    }