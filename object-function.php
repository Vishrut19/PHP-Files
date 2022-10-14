<?php
class Student{
    var $name;
    var $major;
    var $gpa;

    function __construct($name,$major,$gpa){
        $this -> name = $name;
        $this -> major = $major;
        $this -> gpa = $gpa;
    }

    function hasHonors(){
        if ($this -> gpa >=3.5) {
            return "true";
        }
        return "false";
    }
}

$student1 = new student("Jim","Business",2.8);
$student2 = new student("Pam","Art",3.6);

echo $student2-> hasHonors();
?>