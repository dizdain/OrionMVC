<?php
    namespace Orion\Model;

    /**
     * Class Tasks
     * @package Orion\Model
     */
    class Tasks extends Mapper {
        private $table;
        private $id;
        private $name;
        private $type;
        private $created;
        private $updated;
        private $priority;
        private $dependencies;
        private $details;
        private $author;
        private $notes;

        /**
         * @param \mysqli $dbc
         * @param array $data
         */
        public function __construct ( \mysqli $dbc , array $data = [] ) {
            parent::__construct( $dbc );
            $this->table = 'tasks';
        }

        /**
         * @param Tasks $task
         */
        public function insert( Tasks $task ) {

        }

        /**
         * @return string
         */
        public function getTable() {
            return $this->table;
        }

        /**
         * @return integer
         */
        public function getID() {
            return $this->id;
        }

        /**
         * @return string
         */
        public function getName() {
            return $this->name;
        }

        /**
         * @return integer
         */
        public function getType() {
            return $this->type;
        }

        /**
         * @return string
         */
        public function getCreated() {
            return $this->created;
        }

        /**
         * @return string
         */
        public function getUpdated() {
            return $this->updated;
        }

        /**
         * @return integer
         */
        public function getPriority() {
            return $this->priority;
        }

        /**
         * @return mixed
         */
        public function getDependencies() {
            return $this->dependencies;
        }

        /**
         * @return string
         */
        public function getDetails() {
            return $this->details;
        }

        /**
         * @return integer
         */
        public function getAuthor() {
            return $this->author;
        }

        /**
         * @return string
         */
        public function getNotes() {
            return $this->notes;
        }

        /**
         * @param string $name
         */
        public function setName( $name ) {
            $this->name = $name;
        }

        /**
         * @param integer $type
         */
        public function setType( $type ) {
            $this->type = $type;
        }

        /**
         * @param integer $priority
         */
        public function setPriority( $priority ) {
            $this->priority = $priority;
        }

        /**
         * @param array $dependencies
         */
        public function setDependencies( array $dependencies ) {
            $this->dependencies = $dependencies;
        }

        /**
         * @param string $details
         */
        public function setDetails( $details ) {
            $this->details = $details;
        }

        /**
         * @param string $notes
         */
        public function setNotes( $notes ) {
            $this->notes = $notes;
        }

        public function persist( ) {

        }
    }