<!DOCTYPE HTML>
<html>
    <head>
        <style> 
            .error {color:red;}
            .upload {color:green;}
        </style>

    </head>
<body>
<?php
$nameEr=$emailEr=$addressEr="";
$name=$email=$address="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST['name'])){
        $nameEr="Required username";
    }else{
        $name=test_input($_POST['name']);
        if(!preg_match("/^[a-zA-z-]*$/",$name)){
            $nameEr= "only letters and white spaces allowed ";
        }

    }


    if(empty($_POST['email'])){
        $emailEr="required email";
    }else{
        $email=test_input($_POST['email']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailEr="valid email only";
        }
    }

    if(empty($_POST['address'])){
        $addressEr="required address";
    }else{
        $address=test_input($_POST['address']);
        if(!preg_match("/^[a-zA-z-]*$/",$address)){
            $addressEr="valid location only please!!";
        }
    }
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>

<?php
$upload_dir= "uploads/";
$target_file= $upload_dir.basename($_FILES['filetoupload']['nam']);
$uploadOK=1;
$imageFileType=strtolower(pathinfo($target_file,FILEINFO_EXTENSION));

if(isset($_POST["submit"])){
    $check=getimagesize($_FILES['filetoupload']['nam_tmp']);
    if($check !=flase){
        echo "your file is an image".$check["mime"].".";
        $uploadOK=1;
    }else{
        echo "your file is not an image";
        $uploadOK=0;
        

    }
}
    
    
    if(file_exists($target_file));{
        
    }



?>





<h1>FOrm validation </h1>
<p><span class="error">****char required******</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/from-data">
    Name: <input type="text" name="name">
    <span class="error">*<?php echo $nameEr; ?> </span>
    <br><br>

    EMAIL: <input type="text" name="email">
    <span class="error">*<?php echo $emailEr;?></span>
    <br><br>

    ADDRESS: <input type="text" name="address" >
    <span class="error">*<?php echo $addressEr; ?></span>
    <br><br>
    <button type="submit" action="onclick">Click Here !!!!!!!!!!!!</button><br><br>

    <h2 class="upload">Upload any image file hai!!!:</h2>
    <input class="upload" type="file" name="filetoupload" id="filetoupload">
    <input type="submit" value="upload Image" name="submit">
</form>

<?php
echo "<h2>YOUR crazy output</h2>";
echo $name;
echo "<br><br>";
echo $email;
echo "<br>";
echo $address;
echo"<br>";

$myfile=fopen("word.txt","r") or die ("i cant open file");

//$txt="yalis\n";
//fwrite($myfile,$txt);
echo fgets($myfile);
fclose($myfile);


?>


</body>
</html>
