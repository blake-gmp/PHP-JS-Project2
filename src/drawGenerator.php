<?php

  require_once "src/abstract.php";
  require_once "src/interface.php";

class Square extends Shape implements IShapeDrawSquare, IColorable, IDrawable
{
  protected $length = 0;

  private $colors = array("red" => 0, "green" => 0, "blue" => 0);

  private $isRandomColorsBlocks = false;

  public function show() {
    if(!($this->checkIfSidesMoreThanZero($this->length))) 
      return false;

    $this->draw();
  }
  
  public function getShapeName() : string {
    return $this->shapeName;
  }

  public function draw() {
    for($i = 0; $i < $this->length; ++$i) {
      for($k = 0; $k < $this->length; ++$k) {
        echo "<div class='block' style='float: left;
        height: ".Shape::DRAWING_SCALE_X."px; width: ".Shape::DRAWING_SCALE_Y."px; background-color: ".$this->getColorHexValue().";'></div>";
      }
      echo "<div style='clear:both;'></div><br>";
    }
  }

  public function checkIfSidesMoreThanZero($length) {
    if($length > 0)
      return true;
    else
      return false;
  }

  public function getLength() {
    return array("length" => $this->length);
  }

  public function setLength($length) {
    if($this->checkIfSidesMoreThanZero($length)) {
      $this->length = $length;
      return true;
    }
  }

  public function setColorBlocks($color_red, $color_green, $color_blue) {
    if($this->isColorValid($color_red) && $this->isColorValid($color_green) && $this->isColorValid($color_blue)) {
      $this->colors['red'] = $color_red;
      $this->colors['green'] = $color_green;
      $this->colors['blue'] = $color_blue;
    }
  }

  public function getColorBlocks() {
    return array($this->colors['red'], $this->colors['green'], $this->colors['blue']);
  }

  public function setRandomColorsBlocks($bool) {
    if(is_bool($bool)) 
      $this->isRandomColorsBlocks = $bool;
  }

  public function getColorHexValue() {
    if(!($this->isRandomColorsBlocks))
      return sprintf("#%02x%02x%02x", $this->colors['red'], $this->colors['green'], $this->colors['blue']);
    else
      return sprintf("#%02x%02x%02x", rand(0, 255), rand(0, 255), rand(0, 255));
  }

  public function isColorValid($color) {
    if($color > -1 && $color < 256)
      return true;
    else
      return false;
  }
}
  
class Rectangle extends Shape implements IShapeDrawRectangle, IColorable, IDrawable
{
  protected $height = 0;
  protected $width = 0;

  private $colors = array("red" => 0, "green" => 0, "blue" => 0);

  private $isRandomColorsBlocks = false;

  public function show() {
    if(!($this->checkIfSidesMoreThanZero($this->height, $this->width))) 
      return false;
    
    $this->draw();
  }
    
  public function getShapeName() : string {
    return $this->shapeName;
  }

  public function draw() {
    for($i = 0; $i < $this->height; ++$i) {
      for($k = 0; $k < $this->width; ++$k) {
        echo "<div class='block' style='float: left;
        height: ".Shape::DRAWING_SCALE_X."px; width: ".Shape::DRAWING_SCALE_Y."px; background-color: ".$this->getColorHexValue().";'></div>";
      }
      echo "<div style='clear:both;'></div><br>";
    }
  }

  public function checkIfSidesMoreThanZero($height, $width) {
    if($height > 0 && $width > 0)
      return true;
    else
      return false;
  }

  public function getValueSide() {
    return array("height" => "$this->height", "width" => "$this->width");
  }

  public function setValueSide($height, $width) {
    if($this->checkIfSidesMoreThanZero($height, $width)) {
      $this->height = $height;
      $this->width = $width;
      return true;
    }
    else
      return false; 
  }

  public function setColorBlocks($color_red, $color_green, $color_blue) {
    if($this->isColorValid($color_red) && $this->isColorValid($color_green) && $this->isColorValid($color_blue)) {
      $this->colors['red'] = $color_red;
      $this->colors['green'] = $color_green;
      $this->colors['blue'] = $color_blue;
    }
  }

  public function getColorBlocks() {
    return array($this->colors['red'], $this->colors['green'], $this->colors['blue']);
  }
  
  public function setRandomColorsBlocks($bool) {
    if(is_bool($bool)) 
      $this->isRandomColorsBlocks = $bool;
  }

  public function getColorHexValue() {
    if(!($this->isRandomColorsBlocks))
      return sprintf("#%02x%02x%02x", $this->colors['red'], $this->colors['green'], $this->colors['blue']);
    else
      return sprintf("#%02x%02x%02x", rand(0, 255), rand(0, 255), rand(0, 255));
  }

  public function isColorValid($color) {
    if($color > -1 && $color < 256)
      return true;
    else
      return false;
  }
}
?>