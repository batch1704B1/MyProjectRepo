<?php


$ind_array= array("Chips","Biscuits","Fries","Sandwich","Burger","Colddrink","Chocolate");

$ind_array2= array("Red Wavy","Chocolate","Lays Masala","Lays French Cheese","Chips","Lays Salted");

$assoc_array= array("Php"=>"Miss Erum","C#"=>"Sir Waqas","Java"=>"Sir Jamal","Linux"=>"Miss Iqra","MVC.Net"=>"Miss Farhana","Html"=>"Sir Waqas");



echo "<h2>Array Size</h2>";
echo "<p>Indexed Array Size: ".count($ind_array)."<br/>Associative Array Size: ".sizeof($assoc_array)."</p>";


//================================================================================

echo "<h2>Indexed Array (Before Sorting) </h2>";
foreach ($ind_array as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}


sort($ind_array);
echo "<h2>Indexed Array (After Ascending Sorting) </h2>";
foreach ($ind_array as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}

rsort($ind_array);
echo "<h2>Indexed Array (After Descending Sorting) </h2>";
foreach ($ind_array as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}


//================================================================================



echo "<h2>Associative Array (Before Sorting) </h2>";
foreach ($assoc_array as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}


asort($assoc_array);
echo "<h2>Associative Array (After Ascending Sorting) </h2>";
foreach ($assoc_array as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}

arsort($assoc_array);
echo "<h2>Associative Array (After Descending Sorting) </h2>";
foreach ($assoc_array as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}

//================================================================================


echo "<h2>Array Flip</h2>";
$flipped_array= array_flip($assoc_array);
foreach ($flipped_array as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}

//================================================================================


echo "<h2>Array Count Values</h2>";
$count_values= array_count_values($assoc_array);
foreach ($count_values as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}


//================================================================================


echo "<h2>Array Keys</h2>";
$Keys= array_keys($assoc_array);
foreach ($Keys as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}


//================================================================================


echo "<h2>Array Reverse</h2>";
$reversed_array= array_reverse($ind_array2);
foreach ($reversed_array as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}


//================================================================================


echo "<h2>Array Intersect</h2>";
$intersect= array_intersect($ind_array,$ind_array2);
foreach ($intersect as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}



//================================================================================


echo "<h2>Array Shift</h2>";
$shift1= array_shift($ind_array2);
echo "<p><b>".$shift1."</b></p>";
foreach ($ind_array2 as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}


//================================================================================


echo "<h2>Array Pop</h2>";
$pop1= array_pop($ind_array2);
echo "<p><b>".$pop1."</b></p>";
foreach ($ind_array2 as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}

echo "<h2>Array Push</h2>";
$val="Candy";
array_push($ind_array2, $val);
foreach ($ind_array2 as $key => $value) 
{
	echo "<p>".$key."-->".$value."</p>";
}


?>