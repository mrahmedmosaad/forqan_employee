<?php
include 'db.php';
//$university=$_GET['university'];
$col1_data=$_GET['txt'];
$col2_data=$_GET['txt2'];

 $sql = "INSERT INTO $table_name ($col1,$col2) VALUES ('$col1_data','$col2_data')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
