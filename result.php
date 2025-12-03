<?php
//include("functionMarks.php");
$id=$_GET['id'];
echo $id;

$con= new mysqli("localhost","root","","school");
$sql= "SELECT * From marksheet WHERE id=$id";

$result=$con->query($sql);
//var_dump($result->fetch_assoc());
$row=$result->fetch_assoc();

$con->close();

?>
<html>
    <head><title>hehehehehe</title></head>
    <body>
        <p><b>id: </b><?=$row['id']?></p><br>
        <p><b>name: </b><?=$row['name']?></p><br>
        <p><b>Total marks:</b><?=$row['total']?></p><br>
        <p><b>Average marks: </b><?=$row['average']?></p>

    </body>

</html>


