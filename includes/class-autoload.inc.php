<?php 
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = './classes/';
    $extention ='.class.php';
    require_once $path . $className . $extention;
}

?>
