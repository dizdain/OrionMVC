<?php
    namespace Orion\Utility;
    /**
     * Class util
     */
    class util {
        /**
         * @param $ipa (IP Address as dotted string)
         * @return integer (IP Address after encoding)
         */
        public function encodeIP( $ipa ) {
            $ipArr = explode( '.' , $ipa );
            return $ipArr[0] * 0x1000000 + $ipArr[1] * 0x10000 + $ipArr[2] * 0x100 + $ipArr[3];
        }

        /**
         * @param $ipa (Previously encoded IP Address)
         * @return string (IP Address in original form)
         */
        public function decodeIP( $ipa ) {
            $ipArr = array( 0 => floor( $ipa / 0x1000000 ) );
            $ipVint   = $ipa - ( $ipArr[0] * 0x1000000 );
            $ipArr[1] = ( $ipVint & 0xFF0000 ) >> 16;
            $ipArr[2] = ( $ipVint & 0xFF00 ) >> 8;
            $ipArr[3] =  $ipVint & 0xFF;
            return implode( '.' , $ipArr );
        }

        /**
         * @param string $email
         * @param string $repeat
         * @return mixed
         */
        public function validateEmail( $email , $repeat ) {
            $errors = "";
            if( $email == $repeat ) {
                if( filter_var( $email , FILTER_VALIDATE_EMAIL ) == false ) {
                    $errors .= "Please enter a valid email address.\r";
                }
            } else {
                $errors .= "Your email addresses do not match.\r";
            }
            return ( $errors == "" ) ? true : $errors;
        }

        /**
         * @param string $zip
         * @return boolean
         */
        public function validateZip( $zip ) {
            return ( preg_match( '/^[0-9]{5}([- ]?[0-9]{4})?$/' , $zip ) ) ? true : "Please enter a valid zipcode.\r";
        }

        /**
         * @param string $password
         * @param string $repeat
         * @return mixed
         */
        public function validatePassword( $password , $repeat ) {
            $errors = "";
            if( ! empty( $password ) && ( $password == $repeat ) ) { $errors .= "Your Password Must Contain At Least 8 Characters.\r"; }
            elseif( ! preg_match( "#[0-9]+#" , $password ) ) { $errors .= "Your Password Must Contain At Least 1 Number.\r"; }
            elseif( ! preg_match( "#[A-Z]+#" , $password ) ) { $errors .= "Your Password Must Contain At Least 1 Capital Letter.\r"; }
            elseif( ! preg_match( "#[a-z]+#" , $password ) ) { $errors .= "Your Password Must Contain At Least 1 Lowercase Letter.\r"; }
            elseif( ! empty( $password ) ) { $errors .= "Your passwords do not match.\r"; }
            return( $errors == "" ) ? true : $errors;
        }

        /**
         * @param $object
         * @return mixed
         */
        function getAnnotations( $object) {
            $r = new \ReflectionClass( $object );
            $doc = $r->getDocComment();
            preg_match_all('#@(.*?)\n#s', $doc, $annotations);
            return $annotations[1];
        }
    }