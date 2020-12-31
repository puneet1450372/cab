
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        #submit{
            margin-bottom:35px;
            background-color: #ccd138;
        }
       button{
        height: 35px;
           width: 300px;
            border-radius: 10px;
            outline:none;
            background-color: green;
           
       }
        body{
            background-image:url('taxi4.jpg');
             /* height: 600px; */
             border-radius: 100px;
             background-size:100% 100%;
             
        }
        input{
           height: 35px;
           width: 80%;
            border-radius: 4px;
            outline:none;
        }
       
        form{
            background-color: #ddd;
            margin-bottom:50px;
            border-radius:10px;
        }
        
        </style>
</head>
<body>
<?php include 'navbar.php'?>
<section>

    <form  style="border:2px solid white;text-align:center; width:30%; margin-left:15%;margin-top:4%;">
        <h1>SignUp</h1>
   <p> <input type="text" id="fname" name="fname" placeholder="name"></p>
   <p> <input type="email" id="email" name="email" placeholder="Email"></p>
   <p> <input type="text" id="mobile_no" name="mobile_no" placeholder="Mobile no."></p>
    <p><input type="password" id="password" name="password" placeholder="password"></p>
    <p><input type="password" id="cpassword" name="cpassword" placeholder="confirm password"></p>
    <input type="button" id="submit" value="Create Account" name="submit"><br>
    <input type="button" id="submit" value="LoginNow" name="submit" style="background-color: green;"><br>
    <h1 style="color:green" id="result"></h1>
   </form>
</section> 
   <script>
$(document).ready(function(){
    $('#submit').click(function(){
        var name=$('#fname').val();
    var email=$('#email').val();
   var mobile=$('#mobile_no').val();
   var password=$('#password').val();
   var cpassword=$('#cpassword').val();
//    $_SESSION["favcolor"] = "yellow";

   debugger;
        if(name=="" && email=="" && mobile=="" && password=="" && cpassword==""){
            alert("details not filled");
        }
        else if(password!=cpassword)
        {
            alert('password and confirm password must be same');
        }
        else{
        $.ajax({
            url:'sign.php',
            type:"POST",
            data:{
                'name':name,
                'email':email,
                'mobile':mobile,
                'password':password,
               
            },
            success: function(data){
               $('#result').html(data);
            }
        });
        } 
    });
    

});
       
    </script>
 
</body>
<?php include 'footer.php'?>
</html>