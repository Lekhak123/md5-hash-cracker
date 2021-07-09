<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 hash brute force cracker</title>
</head>
<body>
<h1>MD5 cracker</h1>

<p>This application takes a MD5 hash and looks up all the possible combinations for the MD5 hash</p>


<pre>
Debug output:
<?php

 $found = "Not found";
  if (  isset($_GET['md5']) ) { 
    $md5 = $_GET['md5'];
    $show = 15;

    $combination = '0123456789';
    for($i=0; $i<strlen($combination); $i++) {
      $char1 = $combination[$i];
      for($j=0; $j<strlen($combination); $j++ ){
        $char2 = $combination[$j];
        for($k=0; $k<strlen($combination); $k++){
          $char3 = $combination[$k];
          for($m=0; $m<strlen($combination); $m++){
            $char4 = $combination[$m];
            $check = $char1.$char2.$char3.$char4;
            $result = hash('md5', $check);
            if ($result == $md5){
             $found = $check;
             break;
            }
            if ( $show > 0 ) {
              print " $result $check\n";
              $show = $show - 1;
          }
          }
        }
      



      }
    }
  
    
  }
  

  
 

 

?>
</pre>

<p> Original code: <?= htmlentities($found); ?></p>

<form>
<input type="text" name="md5" size="40" />
<input type="submit" value="Crack MD5"/>
</form>

<li><a href="index.php">Reset the page</a></li>


</ul>
</body>
</html>
