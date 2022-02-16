<?php

abstract class Shape 
{
  protected $shapeName;
  const DRAWING_SCALE_X = 20;
  const DRAWING_SCALE_Y = 20;

  public function __construct($shapeName)
  {
    $this->shapeName = $shapeName;
  }

  abstract public function show();
  abstract public function getShapeName() : string;
}

?>