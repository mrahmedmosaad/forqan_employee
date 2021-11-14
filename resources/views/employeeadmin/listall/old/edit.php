<?php
 

include 'db.php';
$id=$_GET['id'];
$sql = "SELECT * FROM $table_name  where id=$id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table style='border:1px solid'><tr><th>ID</th><th>$col1_title</th><th>edit</th></tr>";
  // output data of each row
  $x=0;
  while($row = $result->fetch_assoc()) {
      $x++;
    echo "<tr><td>".$x."</td><td><input type='text' name='txt' id='txt_save' value='". $row["$col1"]."' />".'<th><input type="button" value="save" name="tttttttt" onclick="save('. $row["id"].')" /><input type="button" value="delet" name="tttttttt" onclick="del('. $row["id"].')" /></th>'."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>
