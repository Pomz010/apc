<?php
class TonerEntry {
    private string $date;
    private string $cartridgeType;
    private string $blackQty;
    private string $cyanQty;
    private string $magentaQty;
    private string $yellowQty;
    private string $employeeId;
    private string $transactionType;

    public function __construct (
        $date, 
        $cartridgeType, 
        $blackQty,
        $cyanQty, 
        $magentaQty, 
        $yellowQty,
        $employeeId,
        $transactionType
    ) {
        $this->date = $date;
        $this->cartridgeType = $cartridgeType;
        $this->blackQty = $blackQty;
        $this->cyanQty = $cyanQty;
        $this->magentaQty = $magentaQty;
        $this->yellowQty = $yellowQty;
        $this->employeeId = $employeeId;
        $this->transactionType = $transactionType;
    }

    public function setTonerEntry() {
        try {   
            require 'pdo-connect.php';
            $sql = "INSERT INTO 
                        transaction (`date`, printer_id, black, cyan, magenta, yellow, employee_id, movement_id) 
                    VALUES (
                        '{$this->date}', 
                        '{$this->cartridgeType}', 
                        '{$this->blackQty}', 
                        '{$this->cyanQty}', 
                        '{$this->magentaQty}', 
                        '{$this->yellowQty}', 
                        '{$this->employeeId}', 
                        '{$this->transactionType}'
                        )";     
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = $pdo->prepare($sql);
            $result->execute();
        } catch (PDOException $e) {
            $statement = $e->getMessage();
        }
    }
}