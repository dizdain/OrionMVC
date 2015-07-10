<!DOCTYPE html>
<html>
    <head>
        <?php use Orion\Template\view as view; $view = new view(); $view->header(); ?>
        <title><?php echo ( isset( $title ) ) ? $title : \Orion\ErrorHandler\ErrorHandler::handle( 2006 ); ?></title>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                use Orion\Model;
                use Orion\Model\Tasks;
                include( MODELS . 'tbl.tasks.php' );
                include( MODELS . 'connector.php' );
            ?>
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
                                    <?php
                                        echo $title;
                                        $task = new Tasks( $dbc );
                                        $result = $task->findBy( [] , null , null ,'tasks' );
                                    ?>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Task Title</th>
                                                <th>Type</th>
                                                <th>Created</th>
                                                <th>Priority</th>
                                                <th>Dependencies</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while( $data = mysqli_fetch_array( $result ) ): ?>
                                                <tr>
                                                    <td><?php echo $data['id']; ?></td>
                                                    <td><?php echo $data['name']; ?></td>
                                                    <td><?php echo $data['type']; ?></td>
                                                    <td><?php echo $data['created']; ?></td>
                                                    <td><?php echo $data['priority']; ?></td>
                                                    <td><?php echo ( $data['dependencies'] ) ? $data['dependencies'] : "n/a"; ?></td>
                                                    <td><?php echo $data['details']; ?></td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>