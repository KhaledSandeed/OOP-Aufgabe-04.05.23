<?php

class Person{
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Alter: " . $this->age . "<br>";
        echo "Geschlecht: " . $this->gender . "<br>";
    }
}

class Student extends Person{
    public $studentID;
    public $course;

    public function __construct($name, $age, $gender, $studentID, $course){
        parent::__construct($name, $age, $gender);
        $this->studentID = $studentID;
        $this->course = $course;
    }

    public function displayInfo(){
        parent::displayInfo();
        echo "StudentID: " . $this->studentID . "<br>";
        echo "Kurs: " . $this->course . "<br>";
    }
}

class Teacher extends Person{
    public $teacherID;
    public $subject;

    public function __construct($name, $age, $gender, $teacherID, $subject){
        parent::__construct($name, $age, $gender);
        $this->teacherID = $teacherID;
        $this->subject = $subject;
    }

    public function displayInfo(){
        parent::displayInfo();
        echo "LehrerID: " . $this->teacherID . "<br>";
        echo "Fach: " . $this->subject . "<br>";
        
    }
}


$person = new Person("Max", 23, "männlich");
$student = new Student("Ahmad", 20, "männlich", 123654, "Deutsch");
$teacher = new Teacher("layla", 40, "weiblich", 498465, "Mathematik");

echo "Person <br>";
$person->displayInfo();
echo "<br>";

echo "Student <br>";
$student->displayInfo();
echo "<br>";

echo "Teacher <br>";
$teacher->displayInfo();
echo "<br>";






?>