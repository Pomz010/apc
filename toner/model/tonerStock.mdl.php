<?php
class TonerStockMdl {
    public function getTonerStock() {
        $sql = "SELECT 
                    model, 
                    printer_type, 
                    cartridge_type, 
                    SUM(black), 
                    SUM(cyan), 
                    SUM(magenta), 
                    SUM(yellow)
                FROM 
                    `transaction`
                JOIN 
                    `printer`
                ON 
                    `transaction`.`printer_id` = `printer`.`printer_id`
                GROUP BY 
                    transaction.printer_id;";

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