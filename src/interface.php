<?php

interface IDrawable
{
  public function draw();
}

interface IShapeDrawRectangle
{
  public function checkIfSidesMoreThanZero($height, $width);

  public function getValueSide();
  public function setValueSide($height, $width);
}

interface IShapeDrawSquare
{
  public function checkIfSidesMoreThanZero($length);

  public function getLength();
  public function setLength($length);
}

interface IColorable
{
  public function setColorBlocks($color_red, $color_green, $color_blue);
  public function getColorBlocks();
  public function setRandomColorsBlocks($bool);

  public function getColorHexValue();
  public function isColorValid($color);
}

?>