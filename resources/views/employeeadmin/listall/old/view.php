  <?php
  $col2_data=$_GET['col2_data'];
 include 'db.php';
echo "<table id='customers'><tr><th></th><th>$col1_title</th><th>edit</th></tr>";
// output data of each row

echo "<tr><td> </td><td>";
?>
<input type='text' name='txt' id='txt' value='' />
<!-- onkeyup="if (keyCode === 13) {document.getElementById('new_save').click();}"onkeyup= "new_save()"-->
<?php
echo "<td><input type='button' id='new_save' value='add new' name='tttttttt' onclick='new_save()' /></td></td></tr>";
?>

<?php
//include 'db.php';
  //  echo '<input type="button" value="new" name="tttttttt" onclick="new_1()" />';
//SELECT `id`, `list_number`, `list_name`, `list_item`, `list_item_en`, `notes`, `reg_date` FROM `list_all` WHERE 1

$sql = "SELECT * FROM $table_name where $col2='$col2_data' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table id='customers'><tr><th>م</th><th>$col1_title</th><th>edit</th><th></th></tr>";
  // output data of each row
  $x=0;
  while($row = $result->fetch_assoc()) {
      $x++;
    echo "<tr><td>".$x."</td><td>". $row["$col1"].'</td><td><input type="button" value="edit" name="tttttttt" onclick="edit('. $row["id"].')" /></td><td><input type="button" value="delet" name="tttttttt" onclick="del('. $row["id"].')" />'."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
