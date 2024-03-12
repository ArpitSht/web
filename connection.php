<?php 
    $conn = mysqli_connect("localhost", "root", "", "arpit");
    
    if(!$conn) {
    //   echo "connection is successfull";
    //  } else {
        die(mysqli_error($conn));
    }
?>