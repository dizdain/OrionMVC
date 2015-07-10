<?php
    namespace Orion\Translator;
    use Orion\ErrorHandler\ErrorHandler;

    /**
     * Class Translate
     */
    class Translate {
        private $terms;
        private $language;

        /**
         * @param string $language ( Two-letter language abbreviation, e.g., EN for English or ES for Espanol, as a string )
         */
        public function __construct( $language ) {
            $this->language = $language;
            if( ! file_exists( APP . 'language/' . strtoupper( $this->language ) . '/lng.' . strtolower( $this->language ) . '.php' ) ) {
                if( DEBUG_MODE ) {
                    ErrorHandler::handle( 4002 );
                } else {
                    include( APP . 'language/' . LANGUAGE . '/lng.' . LANGUAGE . '.php' );
                    /** $lang defined in the language file 'included' above */
                    $this->terms = $lang;
                }
            } else {
                /** $lang defined in the language file 'included' above */
                include( APP . 'language/' . strtoupper( $this->language ) . '/lng.' . strtolower( $this->language ). '.php' );
                $this->terms = $lang;
            }
        }

        /**
         * @param $term
         * @return mixed
         */
        public function get( $term ) {
            return $this->terms[$term];
        }

        /**
         * @param string $term
         */
        public function write( $term ) {
            echo $this->terms[$term];
        }
    }