<?php

include_once('mariadb.php');
include_once('employee.php');

class Datas {
    private $con;
    public function __construct(){
        $mariadb = new Mariadb();
        $this->con = $mariadb->connectDb();
    }
    public function getEmployees() {
        $sql = "select * from employees";
        $result = $this->con->query($sql);
        $employeeArray = array();
        while($record = $result->fetch_assoc()) {
            $employee = new Emplyoee();
            $employee->name = $record['name'];
            $employee->city = $record['city'];
            $employee->salary = $record['salary'];
            array_push($employeeArray, $employee);
        }
        return $employeeArray;
    }
    public function insertEmployee($name, $city, $salary) {
        $sql = "
        insert into employees
        (name, city, salary)
        values
        (?, ?, ?)
        ";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ssd", $name, $city, $salary);
        $stmt->execute();
    }
}
