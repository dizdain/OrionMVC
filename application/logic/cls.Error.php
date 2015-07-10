<?php
    namespace Orion\ErrorHandler;
/** Class ErrorHandler */
    class ErrorHandler {
        /** */
        public function __construct() { }
        /**
         * @param integer $error
         * @return string
         */
        public static function handle( $error ) {
            $erray = include( APP . '/language/EN/errors.en.php' );
            echo ( empty( $erray ) ) ? "true" : "false";
            self::writeLog( $error );
            return "Error [" . $error . "]: " . $erray[$error];
        }

        /**
         * @param integer $error
         */
        private static function writeLog( $error ) {
            $file = fopen( APP . '/logs/log.exception.txt' , 'a+' );
            $text = "Code: " . $error . "\t\t Timestamp: " . date( 'YmdHis' ) . "\n";
            fwrite( $file , $text );
            fclose( $file );
        }
    }