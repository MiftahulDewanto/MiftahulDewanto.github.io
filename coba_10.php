<html lang="en">
<head></head>
<body>
  <h1>PHP</h1>
  <?php echo"<h2>Pemula</h2>";?>
</body>
</html>


<?php
  echo "Halo";
  echo "Belajar PHP";
?>


<?php echo"Hello Guys";?>


echo 6+4;
echo 6-4;
echo 6*4;
echo 6/4;
echo 6%4;


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styesheet.css">
</head>
<body>
  <?php
    echo "Hello World";
  ?>
  
  <br>
  
  <?php
    echo 7+2;
  ?>
  
  <br>
  
  <?php
    echo 8%3;
  ?>
</body>
</html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styesheet.css">
</head>
<body>
  <?php
    echo 8+3;
  ?>

  <br>

  <?php
    echo "8+3";
  ?>
</body>
</html>


<?php
  $name="Boby";
  echo $name;
?>


<?php
  $length=12;
  $area=$length*$length;
  echo$area;
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styesheet.css">
</head>
<body>
  <?php
    $fruit="Apel";
    echo$fruit;
  ?>

  <br>

  <?php
    $sum=8+9;
    echo$sum;
  ?>
</body>
</html>


<?php
  $num=8;
  echo$num;
?>
<?php
  $num=10;
  echo$num;
?>


<?php
  $x=1;
  $x=$x+10;
  echo$x;
?>


<?php
  $x=1;
  $x+=10;
  echo$x;
?>


<?php
  $x=4;
  echo$x++;
  $y=4;
  echo++$y;
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styesheet.css">
</head>
<body>
  <?php
    $x=2;
    $y=3;
    $a=4;
    $b=5;
  ?>

  <br>

  <?php
    $x=$x+10;
    echo$x;
  ?>
  
  <br>
  
  <?php
    $y=$y*5;
    echo$y;
  ?>
  
  <br>
  
  <?php
    echo++$a;
  ?>
  
  <br>
  
  <?php
    echo--$b;
  ?>
  
</body>
</html>


<?php
  $lesson="PHP";
  echo$lesson."Pemula";
?>


<?php
  $name="Miftahul";
  $name="Dewanto";
  echo$name;
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styesheet.css">
</head>
<body>
  <?php
    $name="Miftahul Dewanto";
    echo"Halo,$name";
  ?>
</body>
</html>


<?php
  $x=10;
  if($x>5) {
    echo'$x lebih besar dari 5';
  }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styesheet.css">
</head>
<body>
  <?php
    $x=99+99;
    $y=77+77;
    if($x>9000) {
      echo'$x lebih besar dari 9000';
    }
    if($y>6000) {
      echo'$y lebih besar dari 6000';
    }
  ?>
</body>
</html>
