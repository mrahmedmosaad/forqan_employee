  <?php
 include 'db.php';
echo "<table style='border:1px solid'><tr><th></th><th>$col1_title</th><th>edit</th></tr>";
// output data of each row

echo "<tr><td> </td><td>";
?>
<input type='text' name='txt' id='txt' value='' />
<!-- onkeyup="if (keyCode === 13) {document.getElementById('new_save').click();}"onkeyup= "new_save()"-->
<?php
echo "<th><input type='button' id='new_save' value='add new' name='addnew' onclick='new_save()' /></th></td></tr>";
?>
 
