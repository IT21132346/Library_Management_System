<?php

include_once 'config.php';


?>


<?php

if($_GET['submit'])
{
	 $assistantID = $_GET['field1'];
	 $assistantname = $_GET['field2'];
	 $email = $_GET['field3'];
	 $mobile = $_GET['field4'];
	 $password = $_GET['field5'];
	 
	 
	 $query = "UPDATE clerk SET assistantname= '$assistantname',email = '$email' ,mobile = '$mobile',password = '$password' WHERE assistantID = '$assistantID'";
	 
	 $data = mysqli_query($conn,$query);
	 
	 if($data){
		 
		 echo "<script>alert('Record update sucsessfully')</script>";
		 header("location:manageassistant.php");
	 }
	 else
	 {
		 echo "<script>alert('Error in updating record')</script>";
	 }
	 }
	 

mysqli_close($conn);

?>