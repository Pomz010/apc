<?php
require_once "./model/employeeList.mdl.php";

class EmployeeList{
    public function showList() {
        $list = new List();
        return $list->getList();
    }
}