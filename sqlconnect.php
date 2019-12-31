<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("localhost", "root", "root0", "test_db");
    $sql = "SELECT * FROM student";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            echo '<table border="1">';
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>First Name</th>";
                    echo "<th>Last Name</th>";
                    echo "<th>Gender</th>";
                    echo "<th>Address</th>";
                echo "</tr>";
            while($row = $result->fetch_array()){
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['fname'] . "</td>";
                    echo "<td>" . $row['lname'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            // $result->free();
        }
    }

    // Close connection
    // $mysqli->close();
    ?>

  </body>
</html>
