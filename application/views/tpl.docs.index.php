<!DOCTYPE html>
<html>
    <head>
        <?php use Orion\Template\view as view; $view = new view(); $view->header(); ?>
        <title><?php echo ( isset( $title ) ) ? $title : \Orion\ErrorHandler\ErrorHandler::handle( 2006 ); ?></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <header id="page_index_header">
                        <h4><?php $translate->write( 'Welcome' ); ?></h4>
                    </header>
                </div>
            </div>
            <div class="row homepage">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <article id="page_index_body">
                        <?php include( VIEWS . 'mod.navigationMain.php' ); ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="site_content homepage_content">
                                    <h3><?php echo $title; ?></h3>
                                    <p><?php  $translate->write( 'Hopes' ); ?></p>
                                    <p><?php  $translate->write( 'Free_Open' ); ?></p>
                                    <p><?php  $translate->write( 'Caveat' ); ?></p>
                                    <hr class="hr-centered" />
                                    <div><?php $translate->write( 'ToC' ); ?></div>
                                    <hr class="hr-centered" />
                                    <h4><?php $translate->write( 'MVC_title' ); ?></h4>
                                    <p><?php  $translate->write( 'MVC_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Controller_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Controller_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Routing_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Routing_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Views_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Views_contents' ); ?></p>
                                    <h4><?php $translate->write( 'SCSSGrunt_title' ); ?></h4>
                                    <p><?php  $translate->write( 'SCSSGrunt_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Bootstrap_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Bootstrap_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Glyphicons_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Glyphicons_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Responsive_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Responsive_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Localization_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Localization_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Structure_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Structure_contents' ); ?></p>
                                    <h4><?php $translate->write( 'Naming_title' ); ?></h4>
                                    <p><?php  $translate->write( 'Naming_contents' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <footer id="page_index_footer">

                    </footer>
                </div>
            </div>