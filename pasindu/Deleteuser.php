<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="lms";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//Check connection
if($conn->connect_error){
	die("Connection faild:".$conn->connect_error);
}
//echo "Connected successfully";

?>

<?php

	
   $userID=$_GET['id'];
  
  
  $query="delete from user where userID='$userID'";
  
  $data=mysqli_query($conn,$query);


 if($data){
		 
		 echo "<script>alert('Record delete successfully')</script>";
		 header("location:Home1.html");
	 }
	 else
	 {
		 echo "<script>alert('Error in delete record')</script>";
	 }
      


mysqli_close($conn);



?>