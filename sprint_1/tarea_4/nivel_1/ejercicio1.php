<?php

class Employee {

    public string $name;
    public float $salary;

    // Método para definir parámetros (constructor)
    public function __construct(string $name, float $salary) {
    $this->name = $name;
    $this->salary = $salary;
}


    // Imprime nombre y mensaje (pagar o no)
    public function printInfo() {
        echo "Name: " . $this->name . "\n";

        if ($this->salary >= 6000) {
            echo "Paga impuestos.";
        } else {
            echo "No necesita pagar impuestos.";
        }
    }
}

$employee = new Employee("Laura", 6001);
$employee->printInfo();

?>