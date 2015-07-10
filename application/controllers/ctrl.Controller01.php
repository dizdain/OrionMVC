<?php
    namespace Orion\Controller;
    use Orion\Template\view;
    use Orion\Translator\Translate;
    /**
     * Class Controller01
     * @package Orion\Controller
     */
    class Controller01 extends Controller {
        private $data;
        public $viewer;
        public $translator;
        /**
         * Inherit the constructor from Controller().
         */
        public function __construct(  ) {
            parent::__construct();
            $this->viewer = new view();
            $this->translator = new Translate( LANGUAGE );
        }

        /**
         * @param array $data
         */
        public function index( $data = [] ) {

        }

        /**
         * @param string $key
         * @param mixed $value
         */
        public function assign( $key , $value ) {
            $this->data[$key] = $value;
        }
    }