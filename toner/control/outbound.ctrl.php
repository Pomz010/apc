<?php

require_once "./model/destribution.mdl.php";
    class Outbound {
        private string $date;
        private string $destination;
        private string $cartridgeType;
        private string $cyanQty;
        private string $magentaQty;
        private string $yellowQty;
        private string $blackQty;
        private string $requester;

        public function __construct(
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

        public function setOutbound() {
            $outbound = new Destribution(
                $this->date,
                $this->destination,
                $this->cartridgeType,
                $this->cyanQty,
                $this->magentaQty,
                $this->yellowQty,
                $this->blackQty,
                $this->requester
            );

            return $outbound->setDestribution();
        }
    }