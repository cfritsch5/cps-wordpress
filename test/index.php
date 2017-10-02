<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>php website test</h1>
    <p>
    <?php
      $myVariable = 'this is a variable';
      echo "I am in php!";
      if(true){
        echo "I am in an if condition";
      }
      elseif (true) {
        echo "I am in the elseif condition";
      }
      else {
        echo "I am in the else condition";
      }

      for ($i = 0 ; $i < 5; $i++){
        echo $i;
      }
      echo "<h1>wah wah</h1>";
      $myArray = array('a','b','c');

      foreach ($myArray as $each){
        echo "<li>$each kjh</li>";
      }
      echo "</ul>";
      unset($myArray);

     ?>
   </p>
  </body>
</html>
