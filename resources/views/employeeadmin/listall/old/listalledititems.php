
<input type="button" value="save" onclick="save1()" />
<p id="text_result"></p>

<?php
include 'db.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
//SELECT `id`, `order_list`, `name`, `name_en`, `value` FROM `list_all_div` WHERE 1
$sql = "SELECT * FROM list_all_div  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table id='list_all_div'><tr><th>م</th> <th>name</th><th>name_en</th></tr>";
  // output data of each row
  $x=0;
  while($row = $result->fetch_assoc()) {
      $x++;
    echo "<tr><td>". $row["value"]. '</td><td><input type="text"  id="name'. $row["id"].'" value="'. $row["name"].'" name="tttttttt"  /></td><td><input type="text" id="name_en'. $row["id"].'" value="'. $row["name_en"].'" name="tttttttt"  />'."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
    
?>
<script>
    function save1(){
        var value_ar = []; 
        var value_en = []; 
//        
//        //var v=document.getElementById('').value;
//        
//       
        var i;
        var value_ar;
        var value_en;
        
for (i = 1; i < 21; i++) {
//  text += cars[i] + "<br>";
  var name1="name"+i;
  var name2="name_en"+i;

 // var a1=document.getElementById(name1).value;
  
  value_ar=value_ar+","+document.getElementById(name1).value ;
  value_en=value_en+","+document.getElementById(name2).value ;
  
//  value_en.push(document.getElementById(name2).value);
   

}
 
//  alert(JSON.stringify(value_ar));
  
  //-----------------------------------------------------------------------------------------
  
  
 
 
//  if (str=="") {
//    document.getElementById("text_result").innerHTML="";
//   // document.getElementById("resultsave").innerHTML="";
//    return;
//  }
var str =JSON.stringify(value_ar);
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("text_result").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","listalledititems_save_in.php?txt="+value_ar+"&txt2="+value_en,true);
  xmlhttp.send();
 
    
  
  
  
  
  
  
  
  
  
  
  //-----------------------------------------------------------------------------------------
  
  
  
  
  
    }
    </script>
     
 