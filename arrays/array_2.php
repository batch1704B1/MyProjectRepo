

<?php



$single=array("ali","maha","uzma","hira","imran"); //1D array

$multi= array(array("1001","Ali","ali@gmail.com","0337-3737372"),array("1002","Maha","maha@gmail.com","0332-4647484"),array("1003","Uzma","uzma@gmail.com","03xx-xxxxxxx"),array("1004","Imran","imi@gmail.com","0342-8373883"));  //2D array

echo "<h2>1D Array</h2>";
foreach ($single as $key => $value) 
{
	echo "<p>$value</p>";
}

/*for ($i=0; $i < count($single); $i++) 
{ 
	echo "<p>$single[$i]</p>";
}
*/


echo "<h2>Multidimensional Array</h2>";

echo "<table border='1' width='600px'>";
echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Contact</th></tr>";
foreach ($multi as $key => $value) 
{
	echo "<tr>";
	foreach ($value as $k => $v) 
	{
		echo "<td>$v</td>";
	}
	echo "</tr>";
}

echo "</table>";




?>