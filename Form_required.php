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
$nameEr=$emailEr=$addressEr=$imageEr="";
$name=$email=$address=$image="";
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
$target_file= $upload_dir . basename($_FILES['filetoupload']['name']);
$uploadOK=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){
    $check=getimagesize($_FILES['filetoupload']['tmp_name']);
    if($check !=false){
        $image= "your file is an image".$check["mime"].".";
       
        $uploadOK=1;
    }else{
        $imageEr= "your file is not an image";
        
        $uploadOK=0;
    }
}    
    
    if(file_exists($target_file)){
        $image="$target_file is already exist";
        $uploadOK=0;
    }
    if($_FILES["filetoupload"]["size"]>50){
        $imageEr="$target_file is heavy in size";
        $uploadOK=0;
        }

    if($imageFileType !="png" && $imageFileType !="jpeg"){
        $imageEr="$target_file is not in required file format";
        $uploadOK=0;
    }

    if($uploadOK==0)
        $imageEr="the file is not uploaded";
    
    else{
        if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file)){
            $image="The file is" . htmlspecialchars(basename["filetoupload"]["name"]) ."uploaded";
        }else{
            $imageEr=  htmlspecialchars(basename($_FILES["filetoupload"]["name"])) . "file is not uploaded";
        }
    }
?>





<h1>FOrm validation </h1>
<p><span class="error">****char required******</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
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
    <span class="error">*<?php echo $imageEr; ?></span>
</form>

<?php
echo "<h2>YOUR crazy output</h2>";
echo $name;
echo "<br><br>";
echo $email;
echo "<br>";
echo $address;
echo"<br>";
echo $image;
echo "<br";

$myfile=fopen("word.txt","r") or die ("i cant open file");

//$txt="yalis\n";
//fwrite($myfile,$txt);
echo fgets($myfile);
fclose($myfile);


?>


</body>
</html>
