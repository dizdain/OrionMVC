<?php
    namespace Orion\Template;
    use Orion\Translator\Translate;

    /**
 * Class Template
 */
    class view {
        /** */
        public function __construct() { }

        /**
         * @param string $template
         * @param mixed $data
         * @param Translate $translate
         * @return string
         */
        public static function render( $template , $data , Translate $translate ) {
            ob_start();
            ( ! is_array( $data ) ) ?: extract( $data );
            require( VIEWS.$template );
            echo ob_get_clean();
        }

        public function header() { require_once( VIEWS.HEADER ); }
        public function footer() { require_once( VIEWS.FOOTER ); }

        /**
         * @param string $object
         */
        public function request( $object ) { }
    }