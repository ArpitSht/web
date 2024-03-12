<?php 
    include "connection.php";

   if(isset($_POST['submit'])) {
    $Username = $_POST['n1'];
    $Email =  $_POST['n2'];

    $query = "INSERT INTO `form` (`fullName`, `Email`) VALUES ('$Username', '$Email')";
    $result = mysqli_query($conn, $query);
    if($result){
        header('Location:display.php');
        echo "The data is inserted successfully!!";
    } else {
        die(mysqli_error($conn));
    }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insertion Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="navsep">
            <h2>Arpit's_Project</h2>
        </div>
        <div>
            <a href="index.php">Home</a>
            <a href="display.php">Display</a>
        </div>
    </div>



    <div class="heading">
        <h1>Data Insertion Page</h1>
    </div>
    

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="n1" placeholder="Enter your name" required>
      
        <label for="email">Email:</label>
        <input type="email" name="n2" placeholder="Enter your email" required>
      
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset">
      </form>
</body>
</html>