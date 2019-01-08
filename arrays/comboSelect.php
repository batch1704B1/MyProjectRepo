
<html>
<body>

<form method="post">
	<p>
		<select name="sel" onchange="this.form.submit();">
			<option value="ch">Choose</option>
			<option value="bs">Bio-Science</option>
			<option value="cs">Computer-Science</option>
			<option value="ar">Arts</option>

		</select>
	</p>
	<p>

		<?php

			@$gr=$_POST['sel'];
			if($gr=="bs")
			{
		?>
	<input type="checkbox" name="intrst[]" class="form-control" style="height:22px;" value="Reading" />Zoology
	<input type="checkbox" name="intrst[]" class="form-control" style="height:22px;" value="Sports" />Botany

	<?php
		}
		elseif ($gr=="cs") 
		{
	?>
	<input type="checkbox" name="intrst[]" class="form-control" style="height:22px;" value="Games" />Computer
	<input type="checkbox" name="intrst[]" class="form-control" style="height:22px;" value="Gardening" />Mathematics
<?php
}
elseif($gr=="ar")
{

?>

	<input type="checkbox" name="intrst[]" class="form-control" style="height:22px;" value="Computer" />Fine Arts
	<input type="checkbox" name="intrst[]" class="form-control" style="height:22px;" value="Computer" />Home Economics
<?php
}
?>
	</p>
</form>
</body>
</html>



<?php





?>