<?php

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'infraveo',8111);
if (isset($_POST['username'])) {

    $username1 = $_POST['username'];
    $age = $_POST['age'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "infraveo";


    // Check connection 
    if($conn->connect_error) { 
        die('Connection Failed: '.$conn->connect_error); 
    } else {

        $stmt = $conn->prepare("insert into infraveo(username, age) 
        values( ?, ?)");
        
        $stmt->bind_param("si", $username1, $age); 

        $stmt->execute();
        echo "Evaluated Successfully...";
        
        $stmt->close();
        
        // $conn->close();
}
}
?>

