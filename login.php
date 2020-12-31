<?php
session_start();
?>

<?php
$conn= new mysqli("localhost","root","","signup")or die("connection failed");

if(isset($_POST['submit'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $email_search="select *from registration where email='$email'";
   
   $query =mysqli_query($conn,$email_search);
  
   $email_count = mysqli_num_rows($query);

   if($email_count){
      $email_pass =mysqli_fetch_assoc($query);

      $db_pass =$email_pass['password'];
      $_SESSION['name']=$email_pass['name'];
      $pass_decode=password_verify($password, $db_pass);

      if($pass_decode){
         echo "<script>alert('login successful')<script>";

         header("location:taxi.php");
        
      }
      else{
         echo "<script>alert('password incorrect')</script>";
      }
   }
   else{
      echo "<script>alert('invalid email')</script>";
   
   }

}

?>
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="style.css">
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            /* height: 400px auto; */
            background-image:url('taxi4.jpg');
         }
         /* label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         } */
         .box {
            border:#666666 solid 1px;
         }
         #mid{
            margin-top:7%;
            margin-bottom:9%;
            margin-left:25%;
            
           
         }
         form{
            
         }
         
       .box{
         width: 140%;
         height: 40px;
       }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	<?php include 'navbar.php'?>
      <div  id="mid">
         <div style = "width:300px; border: solid 1px #333333;background-color: white;height:300px; width:350px " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px; "><b>Login</b></div>
				
            <div style = "margin:40px">
               
               <form action = "<?php echo( htmlentities($_SERVER['PHP_SELF']))?>" method = "post">
                  <input type = "email" name = "email" class = "box" placeholder="username /email"/><br /><br />
                 <input type = "password" name = "password" class = "box" placeholder="password"/><br/><br />
                  <input type = "submit" value = " Submit " name="submit"/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>
      <?php include 'footer.php'?>
   </body>
</html>