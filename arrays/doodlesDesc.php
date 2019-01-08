
<?php

include('description.php');
$did=$_GET['id'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Doodle Description</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-lg-12">
			<h2>Doodle Description</h2>
		</div>
	</div>
<br/>
<br/>
	<div class="row">
		<h3><?php echo $dnames[$did]; ?></h3>
		<img src="<?php echo $dpics[$did]; ?>" class="img-responsive" />
		<br/>
		<p><?php echo $desc[$did]; ?></p>
		<p><a href="doodles.php">Go Back</a></p>
	</div>	
</div>


</body>
</html>