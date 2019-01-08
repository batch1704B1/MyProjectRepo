
<?php

include('description.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Doodles</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-lg-12">
			<h2>Google Doodles</h2>
		</div>
	</div>

	<div class="row">
		<?php 
		foreach ($dnames as $key => $value) 
		{

		?>

		<div class="col-lg-4" style="float: left;">
			<a href="doodlesDesc.php?id=<?php echo $key; ?>"><img src="<?php echo $dpics[$key]; ?>" width="260px" height="90px" /></a>
			<br/>
			<b><?php echo $value; ?></b>
			<br/>
			<br/>
		</div>

	<?php
		}

		?>
</div>	
</div>


</body>
</html>