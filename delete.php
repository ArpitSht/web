<?php
 include 'connection.php';

 if (isset($_GET['id'])) {
     $id = $_GET['id'];

     

     $query = "DELETE FROM `FORM` WHERE id = $id";

     $result = mysqli_query($conn, $query);

     if ($result) {
        header('Location: ' . $rootDirectory . '/arpit/display.php');
     } else {
         die(mysqli_error($conn));
     }
 } 
?>
