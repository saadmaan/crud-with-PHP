<?php require ('dbconfig.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dept = $_POST["dept"];
    $reg = $_POST["reg"];
    // echo $name;
    // echo $email;
    // echo $dept;
    // echo $reg;
    $sql = "INSERT INTO info (name,email,dept,reg) VALUES ('$name','$email','$dept','$reg')";
    if($conn-> query($sql) === TRUE){
    	$message =  "Your data has been created successfully";
    	header('Location: ab.php?meg='.$message);
    }
}

?>