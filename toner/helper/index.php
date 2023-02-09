<?php

require_once "../control/emp.php";

// print_r($rows);

// $checkList = new UserList();
// $rows = $checkList->getList();

foreach($rows as $row) {
    echo $row['id'] . ":" . $row['name'] . "<br>";
}