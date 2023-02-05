<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice3</title>
</head>
<body>
 <?php 
 
 $sumNote= 35;

  if ($sumNote >= 60) {
      echo "grade will be firt division";

  } 
  elseif ($sumNote >= 45 && $sumNote <= 59 ) {
    echo "grade will be second division";   
  
  }
  elseif ($sumNote >=33 && $sumNote <= 44) {
    echo "grade will be third division";
      
  }
  elseif ($sumNote <33) {
      echo "student will be fail";
  }
  ?>
</body>
</html>