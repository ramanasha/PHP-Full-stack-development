<?php
$mysqli = new mysqli("localhost", "root", "root0", "test_db");
$result =mysqli_query($mysqli , "SELECT * FROM student");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="sqlconnect1.php">Add New</a>
    <table border="1">
      <tr>
        <th> Id</th>
        <th> First Name</th>
        <th> Last Name</th>
        <th> Gender</th>
        <th> Address</th>
        <th> Delete</th>
      </tr>
      <?php
        while ($row = mysqli_fetch_assoc($result)){   ?>
          <tr>
            <td><?php echo $row["id"];  ?></td>
            <td><?php echo $row["fname"];  ?></td>
            <td><?php echo $row["lname"];  ?></td>
            <td><?php echo $row["gender"];  ?></td>
            <td><?php echo $row["address"];  ?></td>
            <td> <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('do you want to delete')"> Delete  </a> </td>

          </tr>

      <?php } ?>

    </table>

  </body>
</html>
