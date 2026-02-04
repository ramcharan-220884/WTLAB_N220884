<?php
$name = "Global Name";
$number = 42;
$floating_num = 9.83;
$bool = true;
$arr = [1,9,18,"cherry"];
if($bool){
  print("value of bool is true<br>");
}
echo $name."<br>";
print_r($arr);
print("<br>Number: ".$number."<br>");
print("Floating Number: ".$floating_num);

function localScope() {
    $name = "Local Name";
    echo "<br>Inside function: " . $name . "\n";
} 
localScope(); //accessing local variable via function call
echo $name;  //prints globalname as local name can be accessed only inside function

//working with global var within local scope
$place = "Mysore";

function globalScope(){
  global $place; //bringing global variable to local scope
  echo "<br> Globally declared Place is: ".$place;
}

globalScope(); //function call to access global variable

//static scope:mem for static vars created only once
function staticScope(){
static $age = 0;
$age++;
print("<br> Age is: ".$age);
}
staticScope();
staticScope();

?>