<?php 
    include('connection.php');
    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM FORM WHERE id='$id'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
    }

     
    if(isset($_POST['submit'])) {
    
        $Username = $_POST['n1'];
        $Email =  $_POST['n2'];
        $query = "UPDATE `form` SET fullName='$Username', Email='$Email' where id= $id";
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

    <div class="heading">
        <h1>Update Your Data</h1>
    </div>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="n1" value="<?php echo $row['fullName']; ?>" placeholder="Update your name" required>
      
        <label for="email">Email:</label>
        <input type="email" name="n2" value="<?php echo $row['Email']; ?>" placeholder="Update your email" required>
      
        <input type="submit" value="Submit" name="submit">
      </form>

</body>
</html>