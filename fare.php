<?php

$locations = array("charbhag"=>0,
                     "indiranagar"=>10,   
                  "BBD"=>30,
                   "Barabanki"=>60,   
                  "Faizabad"=>100,
                  "Basti"=>150,
                  "Gorakhpur"=>210);  
    

                  extract($_POST);



$distt = $locations[$pickup]-$locations[$drop];
 echo "<script>alert($distt)</script>";

?>