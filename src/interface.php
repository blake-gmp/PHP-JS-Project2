<?php

interface IShapeDrawRectangle
{
  public function checkSidesValue($height, $width);
  public function draw();

  public function getValueSide();
  public function setValueSide($height, $width);
}

interface IShapeDrawSquare
{
  public function checkSidesValue($length);
  public function draw();

  public function getValueSide();
  public function setValueSide($length);
}

interface IShapeSetColor
{
  public function setColorBlocks($color_red, $color_green, $color_blue);
  public function getColorBlocks();
  public function setRandomColorsBlocks($bool);

  public function getRGBtoHex();
}

?>