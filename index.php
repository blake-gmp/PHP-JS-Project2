<!DOCTYPE html>
<html>
    <head>

    <?php 
      require_once "src/drawGenerator.php";
    ?>

    </head>
    <body>

    <?php
        
        $square = new Square("test");
        echo $square->getShapeName();

    ?>

    </body>
</html>