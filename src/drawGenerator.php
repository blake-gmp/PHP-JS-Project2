<?php

    require_once "src/abstract.php";
    require_once "src/interface.php";

class Square extends Shape implements IShapeDrawSquare
{
    public function show() {

    }
  
    public function getShapeName() : string {
        return $this->shapeName;
    }

    public function enterLengthAndDraw($length) {
        if($this->checkValues($length)) {
        
        }
    }

    public function checkValues($length) {
        if($length > 0)
          return true;
        else
          return false;
    }
}
  
class Rectangle extends Shape implements IShapeDrawRectangle
{
    public function show() {
        
    }
    
    public function getShapeName() : string {
      return $this->shapeName;
    }

    public function enterLengthAndDraw($height, $width) {
        if($this->checkValues($height, $width)) {

        }
    }

    public function checkValues($height, $width) {
        if($height > 0 && $width > 0)
          return true;
        else
          return false;
    }
}

?>