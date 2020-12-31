<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin-top: 20px;
            height: 25px;
            width: 50%;;
        }
        select{
            margin-top: 20px;
            width: 50%;
            height: 25px;
        }
        form{
            border:2px solid black;
            width: 40%;
            margin-left:10%;
        }
        input[type=button]{
            margin-bottom:20px;
        }
        label{
            font-size:22px;
        }
        body{
            padding-top:5%;
        }
        </style>
</head>
<body style='text-align:center; margin:10px; background-image:url("taxi2.jpg")'>
<h1>BOOK a city taxi to your destination in town</h1>
    <form>
    <h3 style="background-color:yellow;">City taxi</h3>
    <h4> your everyday travel partner</h4>
    <label>Pickup point :</label>
   <select>
        <option>charbhag</option>
        <option>indira Nagar</option>
        <option>BBD</option>
        <option>Barabanki</option>
        <option> Faizabad</option>
        <option>Basti</option>
        <option>Gorakhpur</option>
    <select><br>
    <label>Drop point : </label>
    <select>
       
        <option>indira Nagar</option>
        <option>BBD</option>
        <option>Barabanki</option>
        <option> Faizabad</option>
        <option>Basti</option>
        <option>Gorakhpur</option>
    <select><br>
    <label> Cab Type   :</label>
<select name="option">
    <option><--select--></option>
    <option> CedMicro</option>
    <option> CedMini</option>
    <option>CedRoyal</option>
    <option>CedSUV</option>
    
</select><br>
<label>  Weight   :</label>
<select name="option">
    <option><--select--></option>
    <option> CedMicro</option>
    <option> CedMini</option>
    <option>CedRoyal</option>
    <option>CedSUV</option>
    
</select><br>
    
    <input type="button" name="button" value="Calculate fare">

    </form>
</body>
</html>