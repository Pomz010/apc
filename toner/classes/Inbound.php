<?php

class Inbound {
    private string $movementType;
    private string $date;
    private string $printerModel;
    private string $cartridgeType;
    private string $cyanQty;
    private string $magentaQty;
    private string $yellowQty;
    private string $blackQty;

    public function __construct(
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

    public function getValues(): array {
        $values = array(
            $this->movementType, 
            $this->date, 
            $this->printerModel,
            $this->cartridgeType,
            $this->cyanQty,
            $this->magentaQty,
            $this->yellowQty,
            $this->blackQty
        );

        return $values;
    }
}