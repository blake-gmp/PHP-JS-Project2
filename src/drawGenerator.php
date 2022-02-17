<?php

  require_once "src/abstract.php";
  require_once "src/interface.php";

class Square extends Shape implements IShapeDrawSquare, IShapeSetColor
{
  protected $length = 0;

  private $colors = array("red" => 0, "green" => 0, "blue" => 0);

  private $isRandom = false;

  public function show() {
    if(!($this->checkSidesValue($this->length))) 
      return false;

    switch($this->isRandom)
    {
      case true:
        break;
  
      case false:
        $this->draw();
        break;
    }
  }
  
  public function getShapeName() : string {
    return $this->shapeName;
  }

  public function draw() {
    for($i = 0; $i < $this->length; ++$i) {
      for($k = 0; $k < $this->length; ++$k) {
        echo "<div class='block' style='float: left;
        height: ".Shape::DRAWING_SCALE_X."px; width: ".Shape::DRAWING_SCALE_Y."px; background-color: ".$this->getRGBtoHex().";'></div>";
      }
      echo "<div style='clear:both;'></div><br>";
    }
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

  public function setColorBlocks($color_red, $color_green, $color_blue) {
    if($color_red > -1 && $color_red < 256 && $color_green > -1 && $color_green < 256 && $color_blue > -1 && $color_blue < 256) {
      $this->colors['red'] = $color_red;
      $this->colors['green'] = $color_green;
      $this->colors['blue'] = $color_blue;
    }
  }

  public function getColorBlocks() {
    return array($this->colors['red'], $this->colors['green'], $this->colors['blue']);
  }

  public function setRandomColorsBlocks($bool) {
    if($bool || !$bool) 
      $this->isRandom = $bool;
  }

  public function getRGBtoHex() {
    if(!($this->isRandom))
      return sprintf("#%02x%02x%02x", $this->colors['red'], $this->colors['green'], $this->colors['blue']);
    else
      return sprintf("#%02x%02x%02x", rand(0, 255), rand(0, 255), rand(0, 255));
  }
}
  
class Rectangle extends Shape implements IShapeDrawRectangle, IShapeSetColor
{
  protected $height = 0;
  protected $width = 0;

  private $colors = array("red" => 0, "green" => 0, "blue" => 0);

  private $isRandom = false;

  public function show() {
    if(!($this->checkSidesValue($this->height, $this->width))) 
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
        height: ".Shape::DRAWING_SCALE_X."px; width: ".Shape::DRAWING_SCALE_Y."px; background-color: ".$this->getRGBtoHex().";'></div>";
      }
      echo "<div style='clear:both;'></div><br>";
    }
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

  public function setColorBlocks($color_red, $color_green, $color_blue) {
    if($color_red > -1 && $color_red < 256 && $color_green > -1 && $color_green < 256 && $color_blue > -1 && $color_blue < 256) {
      $this->colors['red'] = $color_red;
      $this->colors['green'] = $color_green;
      $this->colors['blue'] = $color_blue;
    }
  }

  public function getColorBlocks() {
    return array($this->colors['red'], $this->colors['green'], $this->colors['blue']);
  }
  
  public function setRandomColorsBlocks($bool) {
    if($bool || !$bool) 
      $this->isRandom = $bool;
  }

  public function getRGBtoHex() {
    if(!($this->isRandom))
      return sprintf("#%02x%02x%02x", $this->colors['red'], $this->colors['green'], $this->colors['blue']);
    else
      return sprintf("#%02x%02x%02x", rand(0, 255), rand(0, 255), rand(0, 255));
  }
}

?>