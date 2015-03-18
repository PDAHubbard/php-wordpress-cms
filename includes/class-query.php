<?php
    require_once('class-db.php');
    
    if (!class_exists('QUERY')){
        class QUERY{
            
            public function all_posts(){
                global $db;
                
                return $db->select();
            }
        } 
    }

    $query = new QUERY();
?>
