<?php
//echo "Marksheet final ";

if(isset($_POST['name'])){
    $name=$_POST['name'];
}else{
    $name=['unknown user'];
}

if(isset($_POST['computer'])){
    $computer=$_POST['computer'];
}else{
    $computer=0;
}

if(isset($_POST['nepali'])){
    $nepali=$_POST['nepali'];
}else{
    $nepali=0;
}

function sumMarks($MarksArr){
   return array_sum($MarksArr);
}

function avgMarks($MarksArr){
    return array_sum($MarksArr)/count($MarksArr);
}

$Marks=[$computer,$nepali];
$sumM=sumMarks($Marks);
//echo "Total marks of MR/MRS $name out of 200 is :$sumM";

$avgM=avgMarks($Marks);
//echo "Avergae marks of MR/MRS $name out of 200 is :$avgM";

$conn = new mysqli("localhost", "root", "", "school");

$sql="INSERT INTO marksheet (name, computer, nepali, total, average)
    VALUES ('$name', '$computer', '$nepali', '$sumM', '$avgM')";
$conn->query($sql);
$id = $conn->insert_id;

$conn->close();

header("Location: http://localhost/basic_php/php/result.php/?id=".$id);
exit;
?>