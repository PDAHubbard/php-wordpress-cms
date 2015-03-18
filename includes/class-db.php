<?php
    if (!class_exists('DB')){
        class DB {
            public function __construct() {
                $mysqli = new mysqli('localhost', 'cman', 'cman', 'c-man');
                
                if ($mysqli->connect_errno){
                    printf("Connect failed: %s\n", $mysqli->connect_error);
                    exit();
                }
                $this->connection=$mysqli;
            }
            
            public function __destruct() {
                
            }
            
            public function insert($query) {

                $result = $this->connection->query($query);
                
                return $result;
            }
            
            public function select(){
                $query = "SELECT * FROM posts";
                
                $result = $this->connection->query($query);
            }
            
        }
    }
    
    $db = new DB();
?>