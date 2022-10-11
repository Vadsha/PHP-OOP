<?php

    abstract class Abst
    {
        public $name = "Abstraction";

        public function job()
        {
            return $this->name . "works as blah blah!";
        }
    }

    class Raction extends Abst
    {
        public function how()
        {
            return $this->name . "is written like this!";
        }
    }
    $raction = new Raction();
    echo $raction->how();

?>