<?php

    class Encap
    {
        public $name = "Encapsulation";

        public function project()
        {
            return $this->name . " " . "is awesome.";
        }
    }

    class Sulation extends Encap
    {
        public function income()
        {
            return $this->name . " " . "is fantastic.";
        }
    }

    $encap = new Encap();
    $sulation = new Sulation();
    
    echo $encap->name;
    echo "<br>";
    echo $encap->project();
    echo "<br>";
    echo $sulation->name;
    echo "<br>";
    echo $sulation->income();

?>