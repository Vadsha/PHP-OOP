<?php
    class Teacher
    {
        public $name;
        public $age;
        public $posi;

        public function __construct($name,$age,$position)
        {
            $this->age = $age;
            $this->name = $name;
            $this->posi = $position;
        }
    }
    $teacher = new Teacher("Kyaw Kyaw",20,"English");
    echo $teacher->name;
    echo $teacher->age;
    echo $teacher->posi;

?>