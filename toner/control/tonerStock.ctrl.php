<?php
require_once "./model/tonerStock.mdl.php";

class tonerStockCtrl {
    public function getStock() {
        $displayStock = new TonerStockMdl();
        return $displayStock->getTonerStock();
    }
}