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
        require_once 'pdo-connect.php';
        $sql = "INSERT INTO `transaction` (date, cartridge_model, black, cyan, magenta, yellow, employee_id, movement_id) 
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

        try {        
            if ($pdo) {
                $result = $pdo->exec($sql);
                $statement = "Connected to the $db database successfully!";
            }
        } catch (PDOException $e) {
            $statement = $e->getMessage();
        }

        return $result;
    }
}