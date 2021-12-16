<?php 

// $number = rand(1, 100);

// write a function that takes a number as an argument and returns "even" for even numbers and "odd" for odd numbers
// function evenOrOdd($number) {
//     if ($number % 2 == 0) {
//         echo "The number $number is even.";
//     } else {
//         echo "The number $number is odd.";
//     }
// }

if(isset($_POST['submit'])) {
    $num = $_POST['value1'];
    // echo $num;
    if ($num % 2 == 0) {
        echo "The number $num is even.";
    } else {
        echo "The number $num is odd.";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input placeholder="Enter a number" type="number" name="value1">
        <input type="button" name="submit" value="submit">
    </form>
</body>
</html>


<!-- 
<?php
if(isset($_POST["submit"])){
  $Num = $_POST["value1"];

  if ($Num % 2 == 0){
    echo $Num." is an even number.";
  } else{
    echo $Num." is an odd number.";
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
   number <input type="number" name="value1" value="">
   <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
 -->