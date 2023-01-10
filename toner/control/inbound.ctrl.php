<?php

require_once "./model/replenishment.mdl.php";
    class Inbound {
        private string $date;
        private string $cartridgeType;
        private string $cyanQty;
        private string $magentaQty;
        private string $yellowQty;
        private string $blackQty;

        public function __construct(
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

        public function setInbound() {
            $inbound = new Replenishment(
                $this->date,
                $this->cartridgeType,
                $this->cyanQty,
                $this->magentaQty,
                $this->yellowQty,
                $this->blackQty
            );

            return $inbound->setReplenishment();
        }
    }