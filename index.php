<?php
require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Features";
?>

<!DOCTYPE html>
<html>
    <?php renderHead("PHP Boilerplate", ""); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-xs-center">
                        <div class="card-block">
                            <h4 class="card-title">Bootstrap 4</h4>
                            <p class="card-text">The latest and greatest for super quick layouts and UI elements.</p>
                            <a href="http://v4-alpha.getbootstrap.com/getting-started/introduction/" target="_blank" class="btn btn-primary">Bootstrap V4</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-xs-center">
                        <div class="card-block">
                            <h4 class="card-title">LESS</h4>
                            <p class="card-text">Less files in <code/>/resources/less/</code> will be compiled to <code>assets/css/</code>.</p>
                            <a href="http://lesscss.org/" target="_blank" class="btn btn-primary">Less CSS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-xs-center">
                        <div class="card-block">
                            <h4 class="card-title">Font Awesome</h4>
                            <p class="card-text">Full Icon support: <br>
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                                <i class="fa fa-send" aria-hidden="true"></i>
                                <i class="fa fa-beer" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </p>
                            <a href="http://fontawesome.io/icons/" target="_blank" class="btn btn-primary">Font Awesome</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
