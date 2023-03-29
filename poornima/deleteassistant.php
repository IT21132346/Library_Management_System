<?php

include_once 'config.php';


?>

<?php

	
   $assistantID = $_GET['id'];
  
  
  $query = "delete from assistant where assistantID = '$assistantID'";
  
  $data = mysqli_query($conn,$query);


 if($data){
		 
		 echo "<script>alert('Record delete sucsessfully')</script>";
		 header("location:manageassistant.php");
	 }
	 else
	 {
		 echo "<script>alert('Error in delete record')</script>";
	 }
      


mysqli_close($conn);



?>

