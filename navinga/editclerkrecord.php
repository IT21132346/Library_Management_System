<?php

include_once 'config.php';


?>

<?php

if($_GET['submit'])
{
	 $clerkID = $_GET['clerk1'];
	 $clerkname = $_GET['clerk2'];
	 $email = $_GET['clerk3'];
	 $mobile = $_GET['clerk4'];
	 $password = $_GET['clerk5'];
	 
	 
	 $query = "UPDATE clerk SET clerkname = '$clerkname' ,email='$email',mobile='$mobile',password ='$password' WHERE clerkID = '$clerkID'";
	 
	 $data = mysqli_query($connection,$query);
	 
	 if($data){
		 
		 echo "<script>alert('Record update successfully')</script>";
		 header("location:loginclerk.php");
	 }
	 else
	 {
		 echo "<script>alert('Error in updating record')</script>";
	 }
	 }
	 

mysqli_close($connection);

?>