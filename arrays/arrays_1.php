<?php

$marks= array(56,78,65,87,69,70,85); //default indexed array
$names= array(647474=>"Rimsha",748485=>"Faris",745858=>"Subd-e-Gul",847578=>"Rauf",537474=>"Usama"); //indexed array

$faculty=array("HTML"=>"Sir Abid","PHP"=>"Miss Tehreem","SQL"=>"Miss Munazza","Java"=>"Sir Ghufran",
				"Android"=>"Sir Imran"); //associative array



echo "Marks of student at 2nd index: ".$marks[2];

echo "<h2>Marks of Students</h2>";
echo "<ul>";
foreach ($marks as $value) 
{
	echo "<li>".$value."</li>";
}
echo "</ul>";

echo "<br/>";

echo "<h2>Names of Students</h2>";
foreach ($names as $key => $value) 
{
	echo "<p><b>Student".$key."</b>: ".$value."</p>";
}


echo "<br/>";

echo "<h2>Subject-wise Faculty</h2>";
foreach ($faculty as $key => $value) 
{
	echo "<p>Faculty of course ".$key." is ".$value."</p>";
}







?>