
<?php



include_once 'config.php';




?>





<?php



@$fullname = $_POST["fullname"];
@$email = $_POST["email"];
@$password = $_POST["password"];
@$mobile = $_POST["mobile"];




$sql = "INSERT INTO user(userID,username,mobile,email,password) VALUES ('','$fullname','$mobile','$email','$password')";


if(mysqli_query($conn,$sql))
{
                /*Reference stackoverflow*/
     echo "<script>alert('User Registration successfully');        
	 window.setTimeout(function(){
		 
		 window.location.href='../pasindu/Userlogin.php';
	 },1000);
	 </script>";
	 }

     else
    {
     echo "<script>alert('Error : Records are not added')</script>";
    }

    mysqli_close($conn);
    


?>
 
