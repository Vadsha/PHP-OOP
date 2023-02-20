<?php
require_once "shapes.php";
class Facade
{
     private $circle;
     private $square;
     private $triangle;

     public function __construct()
     {
          $this->circle = new Circle();
          $this->square = new Square();
          $this->triangle = new Triangle();
     }

     public function drawCircle()
     {
          $this->circle->draw();
     }

     public function drawSquare()
     {
          $this->square->draw();
     }

     public function drawTriangle()
     {
          $this->triangle->draw();
     }
}