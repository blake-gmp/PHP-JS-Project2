<!DOCTYPE html>
<html>
    <head>

    <?php 
      require_once "src/drawGenerator.php";
    ?>

    <style>
      body {
        margin: 0;
        padding: 0;
      }

      #contener {
        width: 80%;
        height: 100%;
        margin-right: auto;
        margin-left: auto;
        margin-top: 100px;
      }

      .block {
        margin-bottom: -20px;
        
      }
    </style>

    </head>
    <body>
    <div id="contener">
    <?php
        
      $rectangle1 = new Rectangle("test");
      $rectangle1->setValueSide(3,3);
      $rectangle1->show();

      echo $rectangle1->getShapeName(). " wysokość: ".$rectangle1->getValueSide()['height']." szerokość: ".$rectangle1->getValueSide()['width']."<br>";

      $square1 = new Square("test2");
      $square1->setValueSide(6);
      $square1->setColorBlocks(209, 58, 25);
      $square1->show();

      $rectangle2 = new Rectangle("test3");
      $rectangle2->setValueSide(6,20);
      $rectangle2->setRandomColorsBlocks(true);
      $rectangle2->show();

      $rectangle3 = new Rectangle("test3");
      $rectangle3->setValueSide(3,16);
      $rectangle3->show();
      //
    ?>
    </div>
    </body>
</html>