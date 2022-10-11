<?php

    class Mother
    {
        public $name = "Daw Phyu";
        public $age = 40;
        public $kids = 3;
    }

    class Kid extends Mother
    {
        public $kidName;
        public function Job($name)
        {
            $this->kidName = $name;
            

        }
    }
    $mother = new Mother();
    $kid = new Kid();
    echo $kid->name;
    echo $kid->Job("Kyaw Kyaw");
    echo "<br>";
    echo $kid->kidName;
?>