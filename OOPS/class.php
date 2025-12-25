<?php 
 
     class Student {
        public $id = 10;
        public $name = "Akash";
     }

     $student = new Student();
     echo $student->name;
     $student->name = "Rahul";
     echo "<br>";
     echo $student->name;  