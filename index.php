<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once 'includes/class-query.php';
    
    if (isset($_GET['p'])) {
        $post=$_GET['p'];
    } else {
        $post=0;
    }


    ?><pre><?php print_r($query->all_posts());?></pre>
    
    <pre>
    <?php 
        print_r($query->post('$post'));    
    ?>
    </pre>