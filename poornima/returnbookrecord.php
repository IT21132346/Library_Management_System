<?php

include_once 'config.php';


?>
	
	
	
	
	
<?php

if(isset($_POST['btned']))
{
		$bookID = $_POST["bookID"];
		$bookname = $_POST["bookname"];
		$ISBN = $_POST["ISBN"];
		$category = $_POST["category"];
		$author = $_POST["author"];
		$returneddate = $_POST["returneddate"];
		

		$sql = "INSERT INTO returnedbook(bookID ,bookname,ISBN,category,author,returneddate) VALUES ('$bookID','$bookname','$ISBN','$category','$author','$returneddate')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Records Added successfully')</script>";
			 //header("location:manageclerk.php");
		}
		else
		{
			echo "<script>alert('Error : Records are not added')</script>";
		}
		
}
		
	mysqli_close($conn);
  

?>