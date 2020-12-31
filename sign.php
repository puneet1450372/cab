<?php

extract($_POST);

$conn= new mysqli("localhost","root","","signup")or die("connection failed");

$pass=password_hash($password,PASSWORD_BCRYPT);
$emailquery="select * from registration where email='$email'";
$query= mysqli_query($conn,$emailquery);
$emailcount= mysqli_num_rows($query);
if($emailcount>0){
    echo "email already exits";

}
else{

$insertdata = "insert into registration(name,email,mobile,password) values('$name','$email','$mobile','$pass')";
  if ($conn->query($insertdata) === TRUE) {
   
    echo "signup succesfull";
  } 
  
  else {
    echo "Error: " . $insertdata . "<br>" . $conn->error;
  }
} 
  $conn->close();

?>