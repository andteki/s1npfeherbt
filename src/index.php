<?php 
include_once('includes/datas.php');
echo file_get_contents('templates/head.html');

$page = file_get_contents('templates/home.html');

$datas = new Datas();
$employeeArray = $datas->getEmployees();
foreach($employeeArray as $employee) {
    
}

echo $page;

echo file_get_contents('templates/foot.html');