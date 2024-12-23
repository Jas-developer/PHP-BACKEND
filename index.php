<?php 
// LEARNING OBJECT ORIENTED PROGGRAMMING IN PHP

class Employee{
    public string $name;
    public int $age;
    public string $role;
    public int $years_exp;


    function __construct($name,$age,$role,$years_exp)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> role = $role;
        $this -> years_exp = $years_exp;
    }

    function get_employee(){
        return 
        [
            'name' => $this -> name,
            'age' => $this -> age,
            'role' => $this -> role,
            'years_exp' => $this -> years_exp
        ];
    }

    function __destruct()
    {
        echo "Memory is cleaned";
    }
}



$employee_1 = new Employee("Jhon Doe",23,"Call Center Agent",2);

echo $employee_1 -> name;
