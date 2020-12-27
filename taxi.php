<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        select {
            margin-top: 20px;
            background-color: #ddd;
            width: 70%;
            height: 35px;
            border-radius: 3px;
            
        }
        .form1 {
            border: 2px #434747;
            background-color: #fff;
            border-radius: 5px;
            
        }
        form {
            margin-top: 5%;
            margin-right:10%;
            margin-left: 10%;
        }
        input[type=button] {
            margin-top:20px;
            margin-bottom: 40px;
            width: 70%;
            background-color: #ccd138;
            height: 30px;
            border-color: #ccd138;
        }
        label {
            font-size: 22px;
           
        }
        body {
            padding-top: 5%;
        }
        h1 {
            color: #ddd;
        }
        h3 {
            color: #ddd;
        }
       /* @media only screen and (min-width: 600px)
        {*/
        body{
            height: 700px;
            text-align:center; margin:10px; background-image:url("taxi4.jpg") ;
        }
   /* }*/
        /*@media only screen and (max-width: 600px){
            body{
                background-color: white;
            }
    */
        }
        #display{
            font-size:25px;
            color:white;
        }
        p{
            font-size: 40px;
            color:orange;
            margin-top:15%;
            font-weight: 700;
        }
    </style>
</head>
<body >
    <div class="container">
        <h1>BOOK a city taxi to your destination in town</h1>
        <h3>choose from a range of categories and prices</h3>
        <form action="" class="">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 form1">
                    <form style="text-align: center;">
                        <h3 style="background-color:#ccd138;margin-top:7%;margin-left:35%;  margin-right:35%; text-align:center;border-radius:100px;"><span style="color: black;">City taxi</span></h3>
                        <h2></h2>
                        <h4> your everyday travel partner</h4>
                       
                        <select id="pickup" name="pickup">
                            <option>Choose your pickup point</option>
                            <option>charbhag</option>
                            <option>indiranagar</option>
                            <option>BBD</option>
                            <option>Barabanki</option>
                            <option> Faizabad</option>
                            <option>Basti</option>
                            <option>Gorakhpur</option>
                            <select><br>
                               
                            <select id="drop" name="drop">
                                 <option>Choose your drop point</option>
                                    <option>indiranagar</option>
                                    <option>BBD</option>
                                    <option>Barabanki</option>
                                    <option> Faizabad</option>
                                    <option>Basti</option>
                                    <option>Gorakhpur</option>
                                    <select><br>
                                        
                                        <select id="type" name="type">
                                            <option>
                                                Choose your Car type
                                            </option>
                                            <option> CedMicro</option>
                                            <option> CedMini</option>
                                            <option>CedRoyal</option>
                                            <option>CedSUV</option>
                                        </select><br>
                                       
                                        <select id="Weight" name="Weight">
                                            <option>
                                               Choose your luggage  Weight
                                            </option>
                                            <option>0</option>
                                            <option>10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>40</option>
                                       
                                            
                                            <!-- <option>60-70</option>
                                            <option>70-80</option> --> -->
                                        </select>
                                        <input type="button" id="button" value="Calculate fare">
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6" >
                    <p id="display"></p>
                    <h1 id="play"></h1>
                </div>
            </div>
        </form>
<script>
$(document).ready(function(){
    var option =$('#type').options;
     if(option=='CedMicro'){
    document.getElementById('Weight').disabled=true;
     
   }
});



$(document).ready(function(){
$('#button').click(function(){
    var pickup= $('#pickup').val();
    var drop= $('#drop').val();
    var type= $('#type').val();
    var Weight= $('#Weight').val();
    
    $.ajax({
        url:"fare.php",
        type:"POST",
        data:{'pickup':pickup,'drop':drop,'type':type ,'Weight':Weight},
                            success: function(msg,msg1){
        $('#display').html(msg);

       
       
                            }
    })
    
})
})
    
</script>
</body>
</html>
