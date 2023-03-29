<?php

include_once 'config.php';


?>
	
	
	
	
	
<?php

		
		$assistantname = $_POST["aname"];
		$email = $_POST["aemail"];
		$mobile = $_POST["amobile"];
		$password = $_POST["apassword"];

		$sql = "INSERT INTO assistant(assistantID ,assistantname,email,mobile,password) VALUES ('','$assistantname','$email','$mobile','$password')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Records Added successfully')</script>";
			  header("location:manageassistant.php");
		}
		else
		{
			echo "<script>alert('Error : Records are not added')</script>";
		}
		
	mysqli_close($conn);
  

?>