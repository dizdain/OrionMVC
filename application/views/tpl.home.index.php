<!DOCTYPE html>
<html>
    <head>
        <?php use Orion\Template\view as view; $view = new view(); $view->header(); ?>
        <title><?php echo (isset($title)) ? $title : \Orion\ErrorHandler\ErrorHandler::handle(2006); ?></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <header id="page_index_header">
                        <h4><?php $translate->write('Welcome'); ?></h4>
                    </header>
                </div>
            </div>
            <div class="row homepage">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <article id="page_index_body">
                        <?php include(VIEWS . 'mod.navigationMain.php'); ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="site_content homepage_content">

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