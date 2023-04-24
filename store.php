
<?PHP
						$name = $_POST['pname'];
						$age = $_POST['page'];
						$aadhar=$_POST['Aadhar'];
						$contact = $_POST['cnum'];
						$emergency = $_POST['enum'];
						$address=$_POST['addr'];
	// Database Connection code
	$hostName = "phpmya.mysql.database.azure.com";
	$userName = "vamsibro";
	$password = "UCv2M10widqAQn3";
	$databaseName = "project";
	$conn = mysqli_connect($hostName,$userName,$password,$databaseName);
	if(!$conn)
	{
		die("Error : ".mysqli_connect_error());
	}

		$sql = "INSERT INTO `test`( `name`, `age`,`aadhar`,`contact`,`emergency`,`address`)
		                  VALUES('$name','$age','$aadhar','$contact','$emergency','$address');";
		if(mysqli_query($conn,$sql))
		{
			echo '<script type ="text/JavaScript">';  
			echo 'alert("Registration done successfully")';  
			echo '</script>';  
		}
		else
		{
			echo "Something went wrong";
        mysqli_close($conn);
		} 
?>