<?php
class car{
    public $name;
    public $color;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color=$color;
    }

    function get_color(){
        return $this->color;
    }
}
$toyota=new car();
$toyota->set_name('toyota');
$toyota->set_color('reddd');

echo "name of car ". $toyota->get_name();
echo "<br>";
echo "the color of the car is <br>". $toyota->get_color();


class ISP {
    public $name;
    public $speed;

    function __construct($name,$speed){
        $this->name=$name;
        $this->speed=$speed;
    }

    function __destruct(){
        echo "the name os ISP is {$this->name} and the speed of that is {$this->speed}.";
    }
}
    
    $hash= new ISP("Hash","100mbps");

class fruit{
    public $nam;
    public $colo;
    public function __construct($nam,$colo){
        $this->nam=$nam;
        $this->colo=$colo;
    }
   public function intro(){
    echo"The name is {$this->nam} and the color is {$this->colo}";
   }
}
class apple extends fruit{
    ///public function message(){
        ///echo "am i fruit or iphone?";
   /// }
   ///}
///$apple = new apple("redd","apple");
///$apple->message();
///$apple->intro();

   const last_message="hehehehe hasdeli";
   public function byebye(){
    echo self::last_message;
   }
}
$apple= new apple("redd","apple");
$apple->byebye();


?>