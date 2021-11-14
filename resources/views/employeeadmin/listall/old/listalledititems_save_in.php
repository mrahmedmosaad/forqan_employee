<?php
include 'db.php';

  $col1_data=$_GET['txt'];
// echo '<br>';
  $col1_data2=$_GET['txt2'];
//  echo '<br>';
$array=explode(",", $col1_data);
$array2=explode(",", $col1_data2);
 
//print_r($array1);
//echo '<br>';
// echo $array[0];
// echo '<br>';
// echo $array2[0];
//$id=$_GET['id'];
////SELECT `id`, `order_list`, `name`, `name_en`, `value` FROM `list_all_div` WHERE 1
////SELECT `id`, `university`, `university_en`, `first_name`, `last_name` FROM `list_university` WHERE 1
// echo '<br>';
// echo '<br>------------------------------';
for ($index = 0; $index < count($array); $index++) {
    
//    echo$index;
//    echo '<br>';
// echo  $id= $index;
 $id= $index;
//   echo '<br>';
//   echo $array[$index];
//   
//   echo '<br>';
//   
// echo  $array2[$index];
//   
//   echo '<br>';
//    
   $sqla = "UPDATE list_all_div SET name='$array[$index]', name_en='$array2[$index]' WHERE id=$id";

if ($conn->query($sqla) === TRUE) {
 // echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
} 
    
    
} 


echo "Record updated successfully";
///////////////////////////////////////////////////

//include 'view_in.php';
?>