<?php

    $a = 10;

    try{
        if ($a == 10) {
            throw new Exception("error . a is not greater than 10 . " . 100);
        }
        else{echo $a;}
    }

    catch (Exception $e){
        echo $e->getMessage();
        echo "<br>";
        echo $e->getLine();
        echo $e->getFile();
    }
?>