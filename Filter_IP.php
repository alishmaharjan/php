<?php
$ip="127.0.0.1";
$url="alishmaharjan@gmail.com";
$ip6="2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
var_dump(filter_var($ip6,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6));
if(!filter_var($ip6,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) === FALSE){
    echo"$ip6 is a valid ipv6 address <br>";  
}else{
    echo"$ip6 is a not valid ipv6 address<br>";
}

if (!filter_var($ip,FILTER_VALIDATE_IP) === FALSE){
    echo"$ip is a valid ip <br><br>";

}else{
    echo"$ip is not a valid ip";
}

$url= filter_var($url,FILTER_VALIDATE_EMAIL);
if (!filter_var($url,FILTER_VALIDATE_EMAIL) === FALSE){
    echo"$url is valid url <br>";

}else{
    echo"$url is not valid url";
}
$paid=3500;
$min=1000;
$due=3000;

if (filter_var($paid,FILTER_VALIDATE_INT , array("options"=>array("min_value"=>$min,"due_value"=>$due) ))=== false){
echo"the Required amount is not Valid<br>";

}else{
    echo"the amount is valid<br>";
}

$str="<h>hell$%%%%%world hehhehe";
$newstr=(filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH));
echo "$newstr<br>";

//Function callback
function my_callback($item){
    return strlen($item);
}
$stringss=['bannana','apple','alishd'];
$length=array_map("my_callback",$stringss);

print_r ($length);
echo "<br>";

$see='{"peter":35,"hero":90}';

$json=json_decode($see,true);

foreach($json as $key =>$value){
    echo $key ."=>". $value . "<br>";

}

?>