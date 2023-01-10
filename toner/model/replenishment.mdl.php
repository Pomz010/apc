<?php

class Replenishment {
    private string $date;
    private string $cartridgeType;
    private string $cyanQty;
    private string $magentaQty;
    private string $yellowQty;
    private string $blackQty;

    public function __construct (
        $date, 
        $cartridgeType, 
        $cyanQty, 
        $magentaQty, 
        $yellowQty, 
        $blackQty
    ) {
        $this->date = $date;
        $this->cartridgeType = $cartridgeType;
        $this->cyanQty = $cyanQty;
        $this->magentaQty = $magentaQty;
        $this->yellowQty = $yellowQty;
        $this->blackQty = $blackQty;
    }

    public function setReplenishment() {
        require_once 'pdo-connect.php';
        $sql = "INSERT INTO replenishment (date, cartridge_model, cyan, magenta, yellow, black) VALUES ('{$this->date}', '{$this->cartridgeType}', '{$this->cyanQty}', '{$this->magentaQty}', '{$this->yellowQty}', '{$this->blackQty}')";

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