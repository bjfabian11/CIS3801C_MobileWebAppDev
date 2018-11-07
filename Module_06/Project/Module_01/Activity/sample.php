<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Module_01, Activity</title>
  </head>
  <body>
<p>Module_01, Activity</p>
  <p>Hello World</p>

<?php
include 'mod3_config.php';
include 'mod3_opendb.php';

$sql = "SELECT EmailAddress, FirstName, LastName FROM contact LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "FirstName: " . $row["FirstName"]. "<br>";
        echo "LastName: " . $row["LastName"]. "<br>";
        echo "EmailAddress: " . $row["EmailAddress"]. "<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>	
  </body>
</html>
