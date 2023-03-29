<?php

include_once 'config.php';


?>
	
	
	
	
	
<?php

		$clerkname = $_POST["clerkname"];
		$email = $_POST["email"];
		$mobile = $_POST["mobile"];
		$password = $_POST["password"];

		$sql = "INSERT INTO clerk(clerkID ,clerkname,email,mobile,password) VALUES ('','$clerkname','$email','$mobile','$password')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Records Added successfully')</script>";
			 header("location:manageclerk.php");
		}
		else
		{
			echo "<script>alert('Error : Records are not added')</script>";
		}
		
	mysqli_close($conn);
  

?>