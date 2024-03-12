<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Table</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="navbar">
    <div class="navsep">
        <h2>Arpit's_Project</h2>
    </div>
    <div>
        <a href="index.php">Home</a>
        <a href="insert.php">Insert</a>
    </div>
</div>


    <div class="heading">
        <h1>User Data</h1>
    </div>

<!-- Table -->
<table>
  <thead>
    <tr>
    <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
    include "connection.php";
    $query ="SELECT * FROM FORM";
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fullName']; ?></td>
            <td><?php echo $row['Email']; ?></td>
             <td>
                <a href="update.php?id=<?php echo htmlentities($row['id']);?>" style="color: yellow;">Update</a>
                <a href="delete.php?id=<?php echo htmlentities($row['id']);?>">Delete</a>
            </td>
        </tr>        

<?php
    }
?> 
  </tbody>
</table>

</body>
</html>
