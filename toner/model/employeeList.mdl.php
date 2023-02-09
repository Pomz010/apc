<?php
    class UserList{
        public function getList() {
            $sql = "SELECT 
                        id, CONCAT(first_name, ' ',last_name) AS 'name'
                    FROM `employee_list`
                    ORDER BY `name` ASC;";
            
            try {      
                require_once "pdo-connect.php";  
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $rows = $pdo->prepare($sql);
                $rows->execute();

            } catch (PDOException $e) {
                $statement = $e->getMessage();
                $status = "no result";
            }

            return $rows;
        }

    }