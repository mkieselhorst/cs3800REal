<?php
class person{
    private  $name;
    private $age;
    private $gender;
function __construct($name='', $age=0, $gender='Other'){

    $this -> name = $name;
    $this -> age = $age;
    $this -> gender = $gender;

    }
    
    public function getName(){
        return $this -> name;
    }

    public function getAge(){
        return $this -> age;
    }
    public function getGender(){
        return $this -> gender;
    }
    public function setName($name){
        $this -> name = $name;
    }
    public function setAge($age){
        $this -> age = $age;
    }
    public function setGender($gender){
        $this -> gender = $gender;
    }



    public function displayInfo(){
        echo "Name: ". $this -> getName() . '<br />';
        echo "Age: ". $this -> getAge() . '<br />';
        echo "Gender: ". $this -> getGender() . '<br />';
    }
}
?>
class person{

}

class person will define a phpversion

1= data / properties / action / methods / functions
2- in a class / all types of datatypes, containers
3- constructors
    a - default or none paramitized
    b - overloaded
4- access specifies