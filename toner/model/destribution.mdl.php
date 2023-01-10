<?php

class Destribution {
    private string $date;
    private string $destination;
    private string $cartridgeType;
    private string $cyanQty;
    private string $magentaQty;
    private string $yellowQty;
    private string $blackQty;
    private string $requester;

    public function __construct (
        $date, 
        $destination,
        $cartridgeType, 
        $cyanQty, 
        $magentaQty, 
        $yellowQty, 
        $blackQty,
        $requester
    ) {
        $this->date = $date;
        $this->destination = $destination;
        $this->cartridgeType = $cartridgeType;
        $this->cyanQty = $cyanQty;
        $this->magentaQty = $magentaQty;
        $this->yellowQty = $yellowQty;
        $this->blackQty = $blackQty;
        $this->requester = $requester;
    }

    public function setDestribution() {
        require_once 'pdo-connect.php';

        $sql = "INSERT INTO outbound (date, destination, cartridge_model, cyan, magenta, yellow, black, requester) 
                VALUES (
                    '{$this->date}', 
                    '{$this->destination}', 
                    '{$this->cartridgeType}', 
                    '{$this->cyanQty}', 
                    '{$this->magentaQty}', 
                    '{$this->yellowQty}', 
                    '{$this->blackQty}', 
                    '{$this->requester}'
                )";

        try {        
            if ($pdo) {
                $result = $pdo->exec($sql);
                $statement = "Connected to the $db database successfully!";
            }
        } catch (PDOException $e) {
            $statement = $e->getMessage();
        }

        return $this->cyanQty;
    }
}