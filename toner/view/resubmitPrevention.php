<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // User input submitted to create data
        if(isset($_POST['submit'])) {
            $date = $_POST['date'];
            $cartridge_type = $_POST['cartridge_type'];
            $black_qty = $_POST['black_qty'];
            $cyan_qty = $_POST['cyan_qty'];
            $magenta_qty = $_POST['magenta_qty'];
            $yellow_qty = $_POST['yellow_qty'];
            $employeeId = $_POST['employeeId'];
            $transactionType = $_POST['transactionType'];

            $transaction = new Transaction(
                $date, 
                $cartridge_type, 
                $black_qty,
                $cyan_qty, 
                $magenta_qty,
                $yellow_qty,
                $employeeId,
                $transactionType
            );

        $transaction->setTransaction();
        }
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }

?>