//1. Set Up & Start 


//2. Code Commenting 

//inline comment

<?php
//3. Variables, Data Tyoes, Concatenation, Conditional Statements & Echo

$firstName = "Landon";
$lastname = "Orsini";
$age = 20;
$isInstructor = false;
echo "<p> Hello, my name is " . $firstName . " " . $lastname . " and I am " . $age . " years old.</p>";

if ($isInstructor) {
    echo "<p>I am an instructor.</p>";
} else {
    echo "<p>Im not ur damn teacher!</p>";
}
//4. Loosely Typed Language Demo

$num1 = 1;
$num2 = "10";

function add ($num1, $num2) : int {
    return $num1 + $num2;
}

echo "<p> Add Sum 1 an 2 " . add($num1, $num2) . "</p>";

//5. Strict Types & Types Hints


//6. OOP with PHP 
