<?php
require_once "./pdo-connect.php";
    class List{
        public function List() {
            $sql = "SELECT 
                        id, CONCAT(first_name, ' ',last_name) AS 'name'
                    FROM `employee_list`;";
            
            try {      
                require 'pdo-connect.php';  
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $rows = $pdo->prepare($sql);
                $rows->execute();
            } catch (PDOException $e) {
                $statement = $e->getMessage();
            }
    
            return $rows;
        }

    }