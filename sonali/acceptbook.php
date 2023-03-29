<?php

include_once 'config.php';


?>
	
	
	
	
	
	<?php


        if(isset($_POST['issue']))
	{
		$ISBN = $_POST["ISBN"];
		$bookname = $_POST["bookname"];
		$category = $_POST["category"];
		$author = $_POST["author"];


		$sql = "INSERT INTO requested(ISBN,bookname,category,author) VALUES ('$ISBN','$bookname','$category','$author')";
		
		if(mysqli_query($connection,$sql))
		{
			echo "<script>alert('Records Added successfully')</script>";
			 header("location:acceptre.php");
		}
		else
		{
			echo "<script>alert('Error : Records are not added')</script>";
		}
	}
	mysqli_close($connection);
  

?>