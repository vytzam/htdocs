<?php
$n=rand(-20,25);
var_dump($n);echo"<br>";
if($n>1 && $n%$n==0 && $n%1==0){
    echo $n;
    return true;}
else {return false;}

?>