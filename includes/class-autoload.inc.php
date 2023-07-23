<?php 
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = './classses/';
    $extention ='.classes.php';
    require_once $path . $className . $extention;
}
?>
