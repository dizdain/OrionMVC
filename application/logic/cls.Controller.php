<?php
    namespace Orion\Controller;
    use Orion\Template\view;
    use Orion\Translator\Translate;

    /** Class Controller */
    abstract class Controller {
        protected $translator;
        protected $viewer;

        /** */
        public function __construct( ) { }

        /**
         * This is the default 'Action' for every descendant controller. As such, it must be implemented in every controller.
         */
        abstract function index();

        /**
         * This method assigns values to the $data array passed to views.
         * @param string $key
         * @param mixed $value
         */
        abstract function assign( $key , $value );

        /**
         * This method takes an array of keys and values and assigns en masse to the $data array passed to views.
         * @param $array
         * @return mixed
         */
        public function assignGroup( array $array ) {
            foreach( $array as $key => $value ) {
                $this->assign( $key , $value );
            }
        }
    }