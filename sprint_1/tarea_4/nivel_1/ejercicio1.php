<?php

class Employee {

    public $name;
    public $salary;

    // Método para definir parámetros (nombre / sueldo)
    public function setData($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Imprime nombre y mensaje (pagar o no)
    public function printInfo() {
        echo "Name: " . $this->name . "\n";

        if ($this->salary > 6000) {
            echo "No necesita pagar impuestos.";
        } else {
            echo "Necesita pagar impuestos.";
        }
    }
}

$employee = new Employee();
$employee->setData("Laura", 5800);
$employee->printInfo();

?>