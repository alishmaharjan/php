<?php
$a=22;
if ($a>10){
    echo"$a is greater than10\n";

    if($a>20){
        echo"$a still greater than 20\n";
    }
    else
    echo"not greater than 20";
}  
$c=[1,2,3,4];
foreach ($c as $x){
    echo "$x\n";
}

$member=array("alish"=>9+1,"god"=>1);
foreach($member as $x=>$y){
    echo"$x=$y\t";
}
?>