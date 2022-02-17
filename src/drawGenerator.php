<?php

  require_once "src/abstract.php";
  require_once "src/interface.php";

class Square extends Shape implements IShapeDrawSquare
{
  protected $length = 0;

  public function show() {
    if(!($this->checkSidesValue($this->length))) 
      return false;

    for($i = 0; $i < $this->length; ++$i) {
      for($k = 0; $k < $this->length; ++$k) {
        echo "<div class='block' style='float: left;
        height: ".Shape::DRAWING_SCALE_X."px; width: ".Shape::DRAWING_SCALE_Y."px;'></div>";
      }
      echo "<div style='clear:both;'></div><br>";
    }
  }
  
  public function getShapeName() : string {
    return $this->shapeName;
  }

  public function checkSidesValue($length) {
    if($length > 0)
      return true;
    else
      return false;
  }

  public function getValueSide() {
    return array("length" => $this->length);
  }

  public function setValueSide($length) {
    if($this->checkSidesValue($length)) {
      $this->length = $length;
      return true;
    }
  }

}
  
class Rectangle extends Shape implements IShapeDrawRectangle
{
  protected $height = 0;
  protected $width = 0;

  public function show() {
    if(!($this->checkSidesValue($this->height, $this->width))) 
      return false;

    for($i = 0; $i < $this->height; ++$i) {
      for($k = 0; $k < $this->width; ++$k) {
        echo "<div class='block' style='float: left;
        height: ".Shape::DRAWING_SCALE_X."px; width: ".Shape::DRAWING_SCALE_Y."px;'>a</div>";
      }
      echo "<div style='clear:both;'></div><br>";
    }

  }
    
    public function getShapeName() : string {
      return $this->shapeName;
    }

    public function checkSidesValue($height, $width) {
      if($height > 0 && $width > 0)
        return true;
      else
        return false;
    }

    public function getValueSide() {
      return array("height" => "$this->height", "width" => "$this->width");
    }

    public function setValueSide($height, $width) {
      if($this->checkSidesValue($height, $width)) {
        $this->height = $height;
        $this->width = $width;
        return true;
      }
      else
        return false; 
    }
}

?>