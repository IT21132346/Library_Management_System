<?php

include_once 'config.php';


?>


<?php

if($_GET['submit'])
{
	 $authorID = $_GET['author1'];
	 $authorname = $_GET['author2'];
	 
	 
	 
	 $query = "UPDATE author SET authorname= '$authorname' WHERE authorID = '$authorID'";
	 
	 $data = mysqli_query($connection,$query);
	 
	 if($data){
		 
		 echo "<script>alert('Record update successfully')</script>";
		 header("location:manageauthor.php");
		 
	 }
	 else
	 {
		 echo "<script>alert('Error in updating record')</script>";
	 }
	 }
	 

mysqli_close($connection);

?>