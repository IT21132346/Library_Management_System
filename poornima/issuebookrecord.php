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
		$issuedate = $_POST["issuedate"];
		$overduedate = $_POST["overduedate"];

		$sql = "INSERT INTO issuebook(bookID ,bookname,ISBN,category,author,issuedate,overduedate) VALUES ('$bookID','$bookname','$ISBN','$category','$author','$issuedate','$overduedate')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Records Added successfully')</script>";
			 header("location:issuebook.php");
		}
		else
		{
			echo "<script>alert('Error : Records are not added')</script>";
		}
		
}
		
	mysqli_close($conn);
  

?>