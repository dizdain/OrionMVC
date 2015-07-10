<?php
    namespace Orion\Model;
    use Orion\Utility\util;

    /**
 * Class Mapper
 */
    class Mapper {
        private $dbc;
        private $table;

        /**
         * @param \mysqli $dbc
         */
        public function __construct( \mysqli $dbc ) {
            $this->dbc = $dbc;
        }

        /**
         * @param array $columns
         * @param null $orderby
         * @param string $dir
         * @param string $table
         * @return bool|\mysqli_result
         */
        public function findBy( array $columns = [] , $orderby = null , $dir = 'ASC' , $table ) {
            foreach( $columns as $key => $value ) {
                mysqli_real_escape_string( $this->dbc , $key );
                mysqli_real_escape_string( $this->dbc , $value );
            }

            $order = ( $orderby ) ? " ORDER BY {$orderby} {$dir}" : "";
            $output = implode(' AND ', array_map(function ($v, $k) { return sprintf("%s='%s'", $k, $v); }, $columns, array_keys($columns)));
            $sql = "SELECT * FROM {$table}";
            if ( $output || $orderby ) $sql .= " WHERE {$output}{$order}";
            return mysqli_query( $this->dbc , $sql );
        }

        /**
         * @param array $columns
         */
        public function findOneBy( array $columns ) {

        }

        /**
         * @param $columnName
         * @param null $orderby
         * @param string $dir
         */
        public function findUnique( $columnName , $orderby = null , $dir = 'ASC' ) {

        }

        /**
         * @param array $columns
         * @param array $conditions
         */
        public function update( array $columns , array $conditions ) {

        }

        /**
         * @param array $conditions
         */
        public function delete( array $conditions ) {

        }
    }