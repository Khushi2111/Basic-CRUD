<?php
include ("result.php"); 
//  error_reporting (0);
$id=$_GET['id'];
$query = "DELETE FROM INFRAVEO WHERE id = '$id'";
$data=mysqli_query($conn, $query);
if ($data)
{
     echo "<script>alert('Record Deleted from Database')</script>";
    ?>
    <meta http-equiv="refresh" content="0; http://localhost/infraveo/show.php">
 <?php
 }

else
{
echo "<font color='red'>Failed to delete Record from Database";
}
?>