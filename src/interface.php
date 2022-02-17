<?php

interface IShapeDrawRectangle
{
  public function checkSidesValue($height, $width);

  public function getValueSide();
  public function setValueSide($height, $width);
}

interface IShapeDrawSquare
{
  public function checkSidesValue($length);

  public function getValueSide();
  public function setValueSide($length);
}

?>