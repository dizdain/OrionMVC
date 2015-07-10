<?php
    namespace Orion\Model;
    /**
     * Class Sample
     * @package Orion\Model
     */
    class Sample extends Mapper {
        private $id;
        private $name;
        private $attribute;
        private $value;
        private $type;
        private $subtype;
        private $description;
        private $created;

        /**
         * @param \mysqli $dbc
         */
        public function __construct( \mysqli $dbc ) {
            parent::__construct( $dbc );
        }
    }