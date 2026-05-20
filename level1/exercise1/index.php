<?php

require_once "employee.php";

$employee = new employee();

$employee->setEmployee("Antonio Guterres", 50000);

echo "Employee Name: " . $employee->name . "\n";
echo "<br>";
$employee->checkSalary();

?>
