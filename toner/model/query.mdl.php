<?php

class Query {
    private string $movementType;
    private string $date;
    private string $printerModel;
    private string $cartridgeType;
    private string $cyanQty;
    private string $magentaQty;
    private string $yellowQty;
    private string $blackQty;

    public function __construct (
        $movementType,
        $date, 
        $printerModel, 
        $cartridgeType, 
        $cyanQty, 
        $magentaQty, 
        $yellowQty, 
        $blackQty
    ) {
        $this->movementType = $movementType;
        $this->date = $date;
        $this->printerModel = $printerModel;
        $this->cartridgeType = $cartridgeType;
        $this->cyanQty = $cyanQty;
        $this->magentaQty = $magentaQty;
        $this->yellowQty = $yellowQty;
        $this->blackQty = $blackQty;
    }

    public function setQuery() {
        require_once 'pdo-connect.php';
        $sql = "INSERT INTO transactions (date, transaction_type, printer_model, cartridge_model, cyan, magenta, yellow, black) VALUES ('{$this->date}', '{$this->movementType}', '{$this->printerModel}', '{$this->cartridgeType}', '{$this->cyanQty}', '{$this->magentaQty}', '{$this->yellowQty}', '{$this->blackQty}')";

        try {        
            if ($pdo) {
                $result = $pdo->exec($sql);
                $statement = "Connected to the $db database successfully!";
            }
        } catch (PDOException $e) {
            $statement = $e->getMessage();
        }

        return $this->movementType;
    }
}