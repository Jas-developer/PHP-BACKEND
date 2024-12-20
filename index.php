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


//learning how to works with functions in php 
function first_function(){
    echo "This is my first function was executed";
}


//custom functions 
function name_setter($name){
    echo "Hi my name is $name <br/>";
}

//calling a function with an arguments 
name_setter("Jason");


first_function();

//a function can return a value

?>