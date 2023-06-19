<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'infraveo',8111);
?>

<?php 
if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    
    $query = "UPDATE infraveo SET username='$username',age='$age' WHERE id='$id'";

 $data = mysqli_query($conn,$query) ;

    if($data)
{
    echo "<script>alert('Record Updated')</script>";
    // header('/infraveo/show.php');
    ?>
    <meta http-equiv="refresh" content="0; http://localhost/infraveo/show.php">
    <?php
}
else
{
    echo "Failed to Update Record";
}
}
?>`

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    </head>
    <br>
    <br>
    <br>
    <div class="text-center">
    <h3>FORM</h3> &nbsp;&nbsp;&nbsp;
    <a href="form.html">
        <button type="button" class="btn btn-outline-success">+</button>
    </a>
    <br><br>
    </div>
    <body>
        <div class="container">
            
            <table  class="table table-hover" cellspacing="5">
                    <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>age</th>
                        <th colspan="2" align="center">Operation</th>
                    </tr>

<?php

    //Create connection
    // $conn = new mysqli('localhost', 'root', '', 'marksheet');
// require_once('edit.php');
$query = "select * from infraveo";
$data = mysqli_query($conn,$query) ;
$total = mysqli_num_rows($data);


if ($total!=0)
{
     while($infraveo=mysqli_fetch_assoc($data))
     {

         echo "
        <tr>
        <td>".$infraveo['id']."</td>
        <td>".$infraveo['username']."</td>
        <td>".$infraveo['age']."</td>
        
        <td><a href = 'edit.php?id=$infraveo[id]'>
        <input class='btn btn-success' type='submit' value='Update' ></a></td>
        
        <td><a href = 'delete.php?id=$infraveo[id]' onclick='return checkdelete()'>
        <input class='btn btn-danger' type='submit' value='Delete'></a></td>
        </tr>
        ";
     }
 }      
else{
    echo "no data";
}
?>
</table>

<script>
function checkdelete()
{
    return confirm('Are you sure you want to Delete this Record');
}
</script>
</body>
</html>
