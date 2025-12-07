<?php
abstract class car{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    abstract public function intro(): string;
}

class audi extends car{
    public function intro(): string{
        return "choose germen quality, Im $this->name !";
    }
}

class mercedes extends car {
    public function intro(): string{
        return "choose this wtf car, Im $this->name!!!";
    }
}

class honda extends car{
    public function intro(): string{
        return "uo im from japan, im $this->name arigato";
    }
}
$audi =new audi("audi");
echo $audi->intro();
echo "<br>";

$mercedes = new mercedes("alish");
echo $mercedes->intro();
echo "<br>";

$honda= new honda("hondaaaa");
echo $honda->intro();

interface hash{
    public function alish();
}

class network implements hash{
    public function alish(){
        echo "DO networking part";
    }
}

class php implements hash{
    public function alish(){
        echo" learining php";
    }
}

class security implements hash{
    public function alish(){
        echo "FUture in security";
        echo "<br>";
    }
}
$network= new network();
$php= new php();
$security= new security();
$work= array ($network,$php,$security);

foreach ($work as $work){
    $work->alish();
}

trait message1{
    public function msg1(){
        echo "opp this is message one";
    }
}

trait message2{
    public function msg2(){
        echo "opps this is message two hahhha";
        echo "<br>";
    }
}
class goo{
    use message1;
}
class goo2{
    use message1, message2;
}

$send= new goo();
$send->msg1();
echo"<br>";

$send2= new goo2();
$send2->msg1();
$send2->msg2();

class domain{
    protected static function getWebsiteName(){
        return "alishmaharjan.com";
    }
}

class domainw2 extends domain{
    public $websiteName;
    public function __construct(){
        $this->websiteName=parent::getWebsiteName();
    }
}
$web= new domainw2();
echo $web->websiteName;
?>