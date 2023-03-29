<?php

include_once 'config.php';


?>

<?php

if($_GET['submit'])
{
	 $librarianID = $_GET['field1'];
	 $librarianname = $_GET['field2'];
	 $email = $_GET['field3'];
	 $mobile = $_GET['field4'];
	 $password = $_GET['field5'];
	 
	 
	 $query = "UPDATE librarian SET  librarianname = '$librarianname' ,email = '$email',mobile = '$mobile',password = '$password' WHERE librarianID = '$librarianID'";
	 
	 $data = mysqli_query($conn,$query);
	 
	 if($data){
		 
		 echo "<script>alert('Record update sucsessfully')</script>";
		 header("location:loginAsLibrarian.php");
	 }
	 else
	 {
		 echo "<script>alert('Error in updating record')</script>";
	 }
	 }
	 

mysqli_close($conn);

?>