<?php

interface IShapeDrawRectangle
{
  public function enterLengthAndDraw($height, $width);
  public function checkValues($height, $width);
}

interface IShapeDrawSquare
{
  public function enterLengthAndDraw($length);
  public function checkValues($length);
}

?>