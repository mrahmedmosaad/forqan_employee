<?php
include 'db.php';
 
$id=$_GET['id'];

// sql to delete a record
$sql = "DELETE FROM $table_name  WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>