<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

//$servername = "localhost";
//$username = "admin";
//$password = "admin";
//$dbname = "forqan";


// إجراء الإتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الإتصال
if ($conn->connect_error) {
    echo 'err conn';
    die("فشل الإتصال: " . $conn->connect_error);
}

 
 $sSQL= 'SET CHARACTER SET utf8'; 

mysqli_query($conn,$sSQL) 
or die ('Can\'t charset in DataBase');
//SELECT `id`, `list_number`, `list_name`, `list_item`, `list_item_en`, `notes`, `reg_date` FROM `list_all` WHERE 1

$table_name="list_all";
$col1=  "list_item";
$col2=  "list_number";
$col3=  "list_name";

$col1_title=  "القائمة";
