<?php

require_once "./model/tonerTransaction.mdl.php";
    class Transaction {
        private string $date;
        private string $cartridgeType;
        private int $blackQty;
        private int $cyanQty;
        private int $magentaQty;
        private int $yellowQty;
        private string $employeeId;
        private string $transactionType;

        public function __construct(
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

        public function setTransaction() {
            // Converts positive numbers if transaction type is equal to outbound
            if($this->transactionType != '1') {
                $this->blackQty *= -1;
                $this->cyanQty *= -1;
                $this->magentaQty *= -1;
                $this->yellowQty *= -1;
            } 

            $tonerEntry = new TonerEntry(
                $this->date,
                $this->cartridgeType,
                $this->blackQty,
                $this->cyanQty,
                $this->magentaQty,
                $this->yellowQty,
                $this->employeeId,
                $this->transactionType
            );

            return $tonerEntry->setTonerEntry();
        }
    }