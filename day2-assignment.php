<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<?php
$a= 5;
$b=6;
$c=4;

if($a>$b && $a>$c){
  echo $a.' is greater than '.$b. ' and '.$c;
}else if($b>$a && $b>$c){
  echo $b. ' is greater  than '.$a. ' and '.$c;
}else{
  echo $c.' is greater than '.$a.' and '.$b;
}
  
?> 

  </body>
</html>