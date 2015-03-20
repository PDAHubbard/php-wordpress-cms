<?php
    require_once('class-db.php');
    
    if (!class_exists('QUERY')){
        class QUERY{
            
            public function all_posts(){
                global $db;
                
                $query = "SELECT * FROM posts";
                
                return $db->select($query);
            }
            
            public function post($post_id){
                
                global $db;
                
                $query = "SELECT * from posts where id='$post_id'";
                
                return $db->select($query);
            }
        } 
    }

    $query = new QUERY();
?>
