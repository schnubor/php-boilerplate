<?php
require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "About";
?>

<!DOCTYPE html>
<html>
    <?php renderHead(
        "Dr. Bettina Schulze - Urologische Praxis Halle",
        "Sie benötigen urologische Behandlung in Halle? Vereinbaren Sie einfach online Ihren Untersuchungs- oder Beratungstermin."
    ); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div class="container">

        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
