<?php
require_once "./model/employeeList.mdl.php";

// class EmployeeList{
//     public function showList() {
        $list = new UserList();
        $rows = $list->getList();

        // foreach($rows as $row) {
        //     echo $row['id'] . ":" . $row['name'] . "<br>";
        // }
        
        // foreach($rows as $row) {
        //     $result = <<<_DROP
        //                     <option value="{$row['id']}">{$row['first_name']}</option>
        //                 _DROP;
        // }
//     }
// }