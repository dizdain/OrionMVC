<?php
    use Orion\Router\Router as Router;
    $router = new Router();
?>
<div class="row">
    <div class="col-xs-12">
        <div class="nav_bound">
            <div class="row">
                <div class="col-xs-12">
                    <div class="site_navigation">
                        <ul>
                            <li><a href="<?php $router->go( ); ?>">Home</a></li>
                            <li><a href="<?php $router->go( 'home' , 'about' ); ?>">About</a></li>
                            <li><a href="<?php $router->go( 'docs' , 'tasks' ); ?>">Tasks</a></li>
                            <li><a href="<?php $router->go( 'home' , 'license' ); ?>">License</a></li>
                            <li><a href="<?php $router->go( 'docs' ); ?>">Documentation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>