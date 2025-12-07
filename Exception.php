<?php
function divide($dividend,$divisor){
    if($divisor==0){
        throw new exception("Division by zero",1);

    }
    return $dividend/$divisor;
}
try{
    echo divide(5,0);
}catch(exception $ex){
    $message=$ex->getMessage();
    $code= $ex->getCode();
    $file=$ex->getFile();
    $line=$ex->getLine();
    
    echo "exception throen in $file on line$line :[code $code] $message";

}

?>