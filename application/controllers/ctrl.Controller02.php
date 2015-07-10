<?php
    namespace Orion\Controller;
    use Orion\Template\view;
    use Orion\Translator\Translate as Translate;

    /**
     * Class Controller02
     * @package Orion\Controller
     */
    class Controller02 extends Controller {
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
            $this->data = array();
        }

        /**
         * @param array $data
         */
        public function index( $data = [] ) {
            /** Check to ensure $data parameter is an array and if not empty, populate $this->data with its keys/values */
            if( is_array( $data ) && ( ! empty( $data ) ) ) {
                $this->assignGroup( $data );
            }
            /** If you want, manually assign values such as page title with $this->assign() */
            $this->assign( 'title' , $this->translator->get( 'Documentation_title' ) );
            /** Extract our $this->data array to make the data available in our template */
            extract( $this->data );
            /** Start the buffer */
            ob_start( );
            /** Load our templates */
            $this->viewer->header();
            $this->viewer->render( 'tpl.docs.index.php' , $this->data , $this->translator );
            $this->viewer->footer();
            /** Call the output */
            echo ob_get_clean( );
        }

        /**
         * @param array $data
         * @return mixed
         */
        public function tasks( $data ) {
            /** Check to ensure $data parameter is an array and if not empty, populate $this->data with its keys/values */
            if( is_array( $data ) && ( ! empty( $data ) ) ) {
                $this->assignGroup( $data );
            }
            /** If you want, manually assign values such as page title with $this->assign() */
            $this->assign( 'title' , $this->translator->get( 'Task_list_title' ) );
            /** Extract our $this->data array to make the data available in our template */
            extract( $this->data );
            /** Start the buffer */
            ob_start( );
                /** Load our templates */
                $this->viewer->header();
                $this->viewer->render( 'tpl.docs.tasks.php' , $this->data , $this->translator );
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