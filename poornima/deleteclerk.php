<?php

include_once 'config.php';


?>

<?php

	
   $clerkID = $_GET['id'];
  
  
  $query = "delete from clerk where clerkID = '$clerkID'";
  
  $data = mysqli_query($conn,$query);


 if($data){
		 
		 echo "<script>alert('Record delete sucsessfully')</script>";
		 header("location:manageclerk.php");
	 }
	 else
	 {
		 echo "<script>alert('Error in delete record')</script>";
	 }
      


mysqli_close($conn);



?>

