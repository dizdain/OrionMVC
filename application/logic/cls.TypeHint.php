<?php
    namespace Orion\TypeHint;
    /**
     * Class Typehint
     */
    class Typehint {

        private static $Typehints = array(
            'boolean'   => 'is_bool',
            'integer'   => 'is_int',
            'float'     => 'is_float',
            'string'    => 'is_string',
            'resrouce'  => 'is_resource'
        );

        /**
         * @return bool
         */
        public static function initializeHandler() {
            set_error_handler('Typehint::handleTypehint');
            return true;
        }

        /**
         * @param $ThBackTrace
         * @param $ThFunction
         * @param $ThArgIndex
         * @param $ThArgValue
         * @return bool
         */
        private static function getTypehintedArgument($ThBackTrace, $ThFunction, $ThArgIndex, &$ThArgValue) {
            foreach ($ThBackTrace as $ThTrace) {
                if (isset($ThTrace['function']) && $ThTrace['function'] == $ThFunction) {
                    $ThArgValue = $ThTrace['args'][$ThArgIndex - 1];
                    return TRUE;
                }
            }
            return FALSE;
        }

        /**
         * @param $ErrLevel
         * @param $ErrMessage
         * @return bool
         */
        public static function handleTypehint($ErrLevel, $ErrMessage){
            if ($ErrLevel == E_RECOVERABLE_ERROR) {
                if (preg_match(TYPEHINT_PCRE, $ErrMessage, $ErrMatches)) {
                    list($ErrMatch, $ThArgIndex, $ThClass, $ThFunction, $ThHint, $ThType) = $ErrMatches;
                    if (isset(self::$Typehints[$ThHint])) {
                        $ThBacktrace = debug_backtrace();
                        $ThArgValue  = NULL;
                        if (self::getTypehintedArgument($ThBacktrace, $ThFunction, $ThArgIndex, $ThArgValue)) {
                            if (call_user_func(self::$Typehints[$ThHint], $ThArgValue)) {
                                return TRUE;
                            }
                        }
                    }
                }
            }
            return FALSE;
        }
    }
    Typehint::initializeHandler();