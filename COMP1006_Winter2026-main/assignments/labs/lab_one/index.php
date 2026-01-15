<?php 
require "header.php";
require "car.php";

$myCar = new car();

// display car information

echo $myCar->getBadge();
echo $myCar->getCarInfo();

require "footer.php"; 

// Reflection, the lab was pretty straight forward espically if you paid attention to the lecture and the contents, some of the troubles I had were mostly syntax errors but i understand that comes with learning a new language.