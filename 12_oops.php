<?php

class User{
    public $name;
    public $email;
    public $password;

    public function __construct($name,$email,$password){
        $this->name = $name ;
        $this->email = $email;
        $this->password = $password;
    }

    public function get_details(){
        echo $this->name . " " . $this->email . " ";
    }


}
class Employee extends User{
    public $salary;

    public function __construct($name, $email,$password,$salary){
        parent::__construct($name,$email,$password);
        $this->salary = $salary;
    }
    public function get_salary(){
        echo $this->salary;
    }
}

$emp1 = new Employee('sara','sara@gmail.com','2311','893842');
$emp1->get_salary();

// $user1 = new User('danish','dbs@gmai.com','1234');
// $user1->get_details();


?>