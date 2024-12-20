<?php 

//php for loop
for($x = 0; $x <= 10; $x++){
    if($x == 3)continue;
    echo "The number is: $x <br>";
}

//php for each loop

//this is an array 
$colors = array("red","blue","yellow");

//this is a for each loop in an array
foreach($colors as $x){
    echo "$x <br>";
}




?>