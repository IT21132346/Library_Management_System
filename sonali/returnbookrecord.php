<?php

include_once 'config.php';


?>
	
	
	
	
	
	<?php

		$bookID = $_POST["bookID"];
		$bookname = $_POST["bookname"];
		$ISBNnumber = $_POST["ISBNnumber"];
		$category = $_POST["category"];
		$author = $_POST["author"];
		$returneddate=$_POST["returneddate"];
		
		

		$sql = "INSERT INTO returnedbooks(bookID ,bookname,ISBNnumber,category,author,returneddate) VALUES ($bookID,'$bookname',$ISBNnumber,'$category','$author','$returneddate')";
		
		if(mysqli_query($connection,$sql))
		{
			echo "<script>alert('Records Added successfully')</script>";
			 header("location:showreturnedbooks.php");
			
		}
		else
		{
			echo "<script>alert('Error : Records are not added')</script>";
			
		}
		
	mysqli_close($connection);
  

?>