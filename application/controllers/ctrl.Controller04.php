<?php
    namespace Orion\Controller;
    use Orion\Template\view as view;
    use Orion\Translator\Translate as Translate;

    /**
     * Class Controller04
     * @package Orion\Controller
     */
    class Controller04 extends Controller {
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
         * @param mixed $data
         * Controller function for Controller04 > Index
         */
        public function index( $data = [] ) {
            $this->viewer->header();
            $this->viewer->render( 'tpl.home.index.php' , $data , $this->translator );
            $this->viewer->footer();
        }

        /**
         * @param mixed $data
         * Controller function for Controller04 > About Us
         */
        public function about( $data = [] ) {
            $this->viewer->header();
            $this->viewer->render( "tpl.home.about.php" , $data , $this->translator );
            $this->viewer->footer();
        }

        /**
         * @param mixed $data
         * Controller function for Controller04 > Contact Us
         */
        public function contact( $data = [] ) {
            $this->viewer->header();
            $this->viewer->render( "tpl.home.contact.php" , $data , $this->translator );
            $this->viewer->footer();
        }

        /**
         * @param array $data
         * Controller function for Controller04 > License
         */
        public function license( $data = [] ) {
            $this->viewer->header();
            $this->viewer->render( 'tpl.home.license.php' , $data , $this->translator );
            $this->viewer->footer();
        }

        /**
         * @param string $key
         * @param mixed $value
         */
        public function assign( $key , $value ) {
            $this->data[$key] = $value;
        }
    }