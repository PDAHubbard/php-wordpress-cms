<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once 'includes/class-query.php';


    print_r($query->all_posts());


?>
