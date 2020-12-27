<?php
$locations = array("charbhag"=>0,
                     "indiranagar"=>10,   
                  "BBD"=>30,
                   "Barabanki"=>60,   
                  "Faizabad"=>100,
                  "Basti"=>150,
                  "Gorakhpur"=>210);  
 extract($_POST);
 if($pickup=="Choose your pickup point" || $drop=="Choose your drop point")
{
	echo "<script> alert('please choose pickup and drop point')</script>";
}
else{
$distt = abs($locations[$pickup]-$locations[$drop]);
 echo "Your Travell distance is :".$distt."KM <br>";
if($type=="CedMicro"){
	cedmicro($distt);
}
if($type=="CedMini"){
	echo "<script>alert( 'welcome to cedmiini cab')</script>";
	cedmini($distt);
}
if($type=="CedRoyal"){
	echo "<script>alert('welcome to ced ROYAL')</script>";
	cedroyal($distt);
}
if($type=="CedSUV"){
	echo "<script>alert('WELCOME TO CED SUV')</script>";
	cedSUV($distt);
}
}
//fare calculation FUNCTION for cedmicro cab for booking
function cedmini($distt){
	global $price,$lprice,$Weight;
	if( $distt>0 && $distt<=10)
	{
	$price=$distt*14.5;
	}
	elseif ($distt>10 && $distt<=60)
	 {
 	$distt_new= $distt-10;
	$price=$distt_new*13+145;
	}
	elseif ($distt>60 && $distt<=160)
	 {
	$distt_new1=$distt-60;
	$price=($distt_new1*11.20)+795;
	}
	elseif($distt>160)
	{
	$new_distt=$distt-160;
	$price=1915+$new_distt*9.5;
	}
	luggage($Weight);
	$x=$lprice+$price+150;
	echo "your ride price is: $x";
}
//fare calculation FUNCTION for cedmiNI cab for booking
function cedmicro($distt){
	global $price;
	if( $distt>0 && $distt<=10)
	{
	$price=$distt*13.5;}
	elseif ($distt>10 && $distt<=60)
	 {
	 	$distt_new= $distt-10;
	 	$price=$distt_new*12+135;}
	elseif ($distt>60 && $distt<=160)
	 {
	$distt_new1=$distt-60;
	$price=($distt_new1*10.20)+735;
	}
	elseif($distt>160)
	{
	$new_distt=$distt-160;
	$price=1755+$new_distt*8.5;
	}
	echo "Total price is :".($price+50)."/-Rs<br>";
}
//fare calculation FUNCTION for cedrrOYAL cab for booking
function cedroyal($distt){
	global $price,$lprice,$Weight;
 	if( $distt>0 && $distt<=10)
	{
	$price=$distt*15.5;}
	elseif ($distt>10 && $distt<=60)
	 {
	$distt_new= $distt-10;
	$price=$distt_new*14+155;
	}
	elseif ($distt>60 && $distt<=160)
	 {
	$distt_new1=$distt-60;
	$price=($distt_new1*12.20)+855;
	}
	elseif($distt>160)
	{
	$new_distt=$distt-160;
	$price=2075+$new_distt*10.5;
	}
luggage($Weight);
	$x=$lprice+$price+200;
	echo "your ride price is: $x";
 }

//fare calculation FUNCTION for cedsuv cab for booking

function cedSUV($distt){
	global $price,$lprice,$Weight;
	if( $distt>0 && $distt<=10)
	{
	$price=$distt*16.5;
	}
	elseif ($distt>10 && $distt<=60)
	 {
	$distt_new= $distt-10;
	$price=$distt_new*15+165;
	}
	elseif ($distt>60 && $distt<=160)
	 {
	$distt_new1=$distt-60;
	$price=($distt_new1*13.20)+915;
	}
	elseif($distt>160)
	{
	$new_distt=$distt-160;
	$price=2235+$new_distt*11.5;
	}
	Suvluggage($Weight);
	$x=$lprice+$price+250;
	echo $x;
}
function luggage($Weight){
	global $lprice,$price;
	if ($Weight>0 && $Weight<=10){
		$lprice=50;}
	elseif($Weight>10 && $Weight<=20){
		$lprice=100;
	}
	elseif ($Weight>20) {
		$lprice=200; }
}
function Suvluggage($Weight){
	global $lprice,$price;
	if ($Weight>0 && $Weight<=10){
		$lprice=100;}
	elseif($Weight>10 && $Weight<=20){
		$lprice=200;}
	elseif ($Weight>20) {
		$lprice=400;}
}
?>
