<?php

if(isset($_POST['name'])){
//set connection variables    
$server="localhost";
$username="root";
$password="";
//create a database connection
$con=mysqli_connect($server,$username,$password);

//check for connection success
if(!$con){
    die("Fail to connect to db".mysqli_connect());
}
//echo"Connection Successful to database";

//collect post variables
$name= $_POST['name'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$Entertext= $_POST['Entertext'];

//Execute the query
$sql= "INSERT INTO `trip`.`trip` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$Entertext', current_timestamp());";
// echo $sql;

if($con->query($sql)==true){
//   echo "Successfully inserted";
    
}
else{
    echo "Error : $sql <br>  $con->error";


}
//close the db connection
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <h1>This is our travel form welcome to trip</h1>
       
        
    </div>
    <div class="Tripform">
    
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter age">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
        <textarea name="Entertext" id="Entertext" cols="30" rows="10" placeholder="Enter any additional information"></textarea><br>
        <button type="submit" class="btn">submit</button>
       
         </form>
    </div>
    
    <script src="file.js"></script>
</body>
</html>