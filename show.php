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
                        <th>Age</th>
                        <th colspan="2" align="center">Operation</th>
                    </tr>

<?php

    // Create connection
    // $conn = new mysqli('localhost', 'root', '', 'marksheet');
require_once('result.php');
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