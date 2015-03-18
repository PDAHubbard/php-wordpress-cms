<?php

    require_once('class-db.php');

    if (!class_exists("INSERT")){
        class INSERT{
            public function post($postdata){
                global $db;
                
                $title = $postdata['post-title'];
                $content = $postdata['post-content'];
                $category = serialize($postdata['post-category']);
                
                
                //Table and column names can't include dashes
                $query = "
                        INSERT INTO posts(post_title, post_content, post_category, insert_time)
                        VALUES ('$title', '$content', '$category', now())
                    ";
                
                return $db->insert($query);
            }
        }
    }
    
    $insert = new INSERT();

?>
