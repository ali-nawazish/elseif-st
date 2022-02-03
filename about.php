<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if statement</title>
</head>
<body>
  
  <?php
      $isMale = true; //if statement true or false
      $isTall = false; //if statement false or true
      if ($isMale && $isTall){
      echo "You are a tall male";
    } elseif ($isMale && !$isTall) {
      echo "You are a short male";
    } elseif (!$isMale && $isTall){
      echo "You are not male but are tall";
    } else {
      echo "You are not male and not tall";
    }
  ?>
  
</body>
</html>
