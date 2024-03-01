<?php
include 'database.php';
$ur_id=$_GET['id'];

  $a="DELETE FROM user_registration where user_id='".$ur_id."'";
   $res=mysqli_query($con,$a);	

  if($res==1)
  {
  //echo ("file delete")
    } 
	
	  if($res==0)
  {
  } 
?>
 
  <script >
   alert("data deletion success");
  window.location="admin_profile.php";
  </script>

  <script >
  alert("data deletion failed");
  window.location="admin_profile.php";
  </script>