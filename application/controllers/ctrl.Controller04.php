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
            /** Check to ensure $data parameter is an array and if not empty, populate $this->data with its keys/values */
            if( is_array( $data ) && ( ! empty( $data ) ) ) {
                $this->assignGroup( $data );
            }
            /** If you want, manually assign values such as page title with $this->assign() */
            $this->assign( 'title' , $this->translator->get( 'Home_title' ) );
            /** Extract our $this->data array to make the data available in our template */
            extract( $this->data );
            /** Start the buffer */
            ob_start( );
            /** Load our templates */
            $this->viewer->header();
            $this->viewer->render( 'tpl.home.index.php' , $this->data , $this->translator );
            $this->viewer->footer();
            /** Call the output */
            echo ob_get_clean( );
        }

        /**
         * @param mixed $data
         * Controller function for Controller04 > About Us
         */
        public function about( $data = [] ) {
            /** Check to ensure $data parameter is an array and if not empty, populate $this->data with its keys/values */
            if( is_array( $data ) && ( ! empty( $data ) ) ) {
                $this->assignGroup( $data );
            }
            /** If you want, manually assign values such as page title with $this->assign() */
            $this->assign( 'title' , $this->translator->get( 'About_title' ) );
            /** Extract our $this->data array to make the data available in our template */
            extract( $this->data );
            /** Start the buffer */
            ob_start( );
            /** Load our templates */
            $this->viewer->header();
            $this->viewer->render( 'tpl.home.about.php' , $this->data , $this->translator );
            $this->viewer->footer();
            /** Call the output */
            echo ob_get_clean( );
        }

        /**
         * @param mixed $data
         * Controller function for Controller04 > Contact Us
         */
        public function contact( $data = [] ) {
            /** Check to ensure $data parameter is an array and if not empty, populate $this->data with its keys/values */
            if( is_array( $data ) && ( ! empty( $data ) ) ) {
                $this->assignGroup( $data );
            }
            /** If you want, manually assign values such as page title with $this->assign() */
            $this->assign( 'title' , $this->translator->get( 'Contact_title' ) );
            /** Extract our $this->data array to make the data available in our template */
            extract( $this->data );
            /** Start the buffer */
            ob_start( );
            /** Load our templates */
            $this->viewer->header();
            $this->viewer->render( 'tpl.home.contact.php' , $this->data , $this->translator );
            $this->viewer->footer();
            /** Call the output */
            echo ob_get_clean( );
        }

        /**
         * @param array $data
         * Controller function for Controller04 > License
         */
        public function license( $data = [] ) {
            /** Check to ensure $data parameter is an array and if not empty, populate $this->data with its keys/values */
            if( is_array( $data ) && ( ! empty( $data ) ) ) {
                $this->assignGroup( $data );
            }
            /** If you want, manually assign values such as page title with $this->assign() */
            $this->assign( 'title' , $this->translator->get( 'License_title' ) );
            /** Extract our $this->data array to make the data available in our template */
            extract( $this->data );
            /** Start the buffer */
            ob_start( );
            /** Load our templates */
            $this->viewer->header();
            $this->viewer->render( 'tpl.home.license.php' , $this->data , $this->translator );
            $this->viewer->footer();
            /** Call the output */
            echo ob_get_clean( );
        }

        /**
         * @param string $key
         * @param mixed $value
         */
        public function assign( $key , $value ) {
            $this->data[$key] = $value;
        }
    }