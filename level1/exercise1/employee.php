<?php
class employee {
    public string $name;
    public float $salary;

    public function setEmployee(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function checkSalary() {
        if ($this->salary > 6000) {
            echo "Employee " . $this->name . " has to pay taxes.\n";
        } else {
            echo "Employee " . $this->name . " doesn't have to pay taxes.\n";
        }
    }
}
$employee = new employee();
$employee->setEmployee("Antonio Guterres", 50000);
echo "Employee Name: " . $employee->name . "\n";
echo "<br>";
$employee->checkSalary();

?>