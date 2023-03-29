<?php

include_once 'config.php';


?>

<?php

	
   $authorID = $_GET['id'];
  
  
  $query = "delete from author where authorID = '$authorID'";
  
  $data = mysqli_query($connection,$query);


 if($data){
		 
		 echo "<script>alert('Record delete successfully')</script>";
		 header("location:manageauthor.php");
	 }
	 else
	 {
		 echo "<script>alert('Error in delete record')</script>";
	 }
      


mysqli_close($connection);



?>

