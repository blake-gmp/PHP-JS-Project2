<?php

abstract class Shape 
{
  protected $shapeName;
  protected const DRAWING_SCALE_X = 40;
  protected const DRAWING_SCALE_Y = 40;

  public function __construct($shapeName)
  {
    $this->shapeName = $shapeName;
  }

  abstract public function show();
  abstract public function getShapeName() : string;
}

abstract class MapRender
{
  static private $mapName;
  static private $scale_x;
  static private $scale_y;
  static private $scale_z;

  public function __construct($mapName = "test", $x = 2000, $y = 2000, $z = 2000)
  {
    $this->mapName = $mapName;
    $this->scale_x = $x;
    $this->scale_y = $y;
    $this->scale_z = $z;
  }

  abstract public function render();
}

?>