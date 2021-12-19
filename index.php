<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Severance PHP: Index File</title>
</head>
<body>
  <h1>Index File for Severance PHP</h1>
  <h2>HTML page</h2>
  <?php
  
  $x = 4 * 44;
  echo "List the number ".$x." times by morning!\n";
  echo "Then jump toward the morning moon.\n";
  $money = 7700;
  while($money > 400){
    print "<p>You're down to $".$money." in your account.💰</p>\n";
    $money = $money - 400;
  }

  
 for($deposit = 0; $deposit <= 15; $deposit++){
   echo "$deposit of 200 is $". $deposit * 200;
    echo "\n";
  }
 
 for($count = 1; $count < 100; $count++){
   if(($count % 2) == 0 ) continue;
     echo "Count: $count\n";
  
   
 }

?>
<p>This was written in HTML, not in PHP.</p>
</body>
</html>