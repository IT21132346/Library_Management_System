<?php

include_once 'config.php';


?>

<?php

	
     $ISBN = $_GET['id'];
  
  
    $query = "delete from request where ISBN = '$ISBN'";
  
    $data = mysqli_query($conn,$query);


 if($data){
		 /*Reference stackoverflow*/
		 echo "<script>alert('Record delete sucessfully');     
	 window.setTimeout(function(){
		 
		 window.location.href='manager.php';
	 },1000);
	 </script>";
	 }
		 

	 
	 else
	 {
		 echo "<script>alert('Error in delete record')</script>";
	 }
      


    mysqli_close($conn);



?>

 