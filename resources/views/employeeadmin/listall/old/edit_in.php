<?php
include 'db.php';

$col1_data=$_GET['txt'];

$id=$_GET['id'];
//SELECT `id`, `university`, `university_en`, `first_name`, `last_name` FROM `list_university` WHERE 1
$sqla = "UPDATE $table_name SET $col1='$col1_data' WHERE id=$id";

if ($conn->query($sqla) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
///////////////////////////////////////////////////

//include 'view_in.php';
?>