<!DOCTYPE html >
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 350px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
 
/*////////////////////////////////////////*/
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

input[type=button]{background-color:greenyellow;cursor: pointer;border-radius: 12px;border-width:  0px    }

input[type=button]:hover {background-color:yellowgreen;cursor: pointer;}

</style>



    <title>تعديل القوائم</title>
</head>
<body>

<!--


$col1=  "list_item";
$col2=  "list_number";
$col3=  "list_name";


-->
<!--<a href="listalledititems.php" target="_blank">edit list</a>
<a href="" target="_parent">edit</a>-->
<a href="#" onclick='window.open("listalledititems.php", "", "width=400,height=600")'>edit list</a>
<p id="val1">---</p>
<select name="list" id="list" onchange="view()">
    
 <?php
include 'db.php';
//    $list_name_array=array('','المؤهلات','الجامعات','التخصصات','الجنسيات','المدارس','الوظائف','صاحب العمل','الكلية','قائمة3','قائمة4');
//    for ($index = 1; $index < 10; $index++) {
//        
//        echo "<option value='$index'>$list_name_array[$index]</option>";
//     }
//////////////////////////////////////////////////////////////
     
     
     
//SELECT `id`, `order_list`, `name`, `name_en`, `value` FROM `list_all_div` WHERE 1
$sql = "SELECT * FROM list_all_div  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
//  echo "<table id='list_all_div'><tr><th>م</th> <th>name</th><th>name_en</th></tr>";
  // output data of each row
//  $x=0;
  while($row = $result->fetch_assoc()) {
//      $x++;
      
     echo "<option value='".$row["value"]."'>".$row['name']."</option>";  
      
      
      
//    echo "<tr><td>". $row["value"]. '</td><td><input type="text"  id="name'. $row["id"].'" value="'. $row["name"].'" name="tttttttt"  /></td><td><input type="text" id="name_en'. $row["id"].'" value="'. $row["name_en"].'" name="tttttttt"  />'."</td></tr>";
  }
//  echo "</table>";
} else {
  echo "0 results";
}
//$conn->close();
    
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     ?>
    </select>
 <p id="text_result" > </p>
 
  
  <p id="txtview" >
 
 </p>
 
 












 
 
 
 
 
 
 
 
 
 
 
<script>
    
    /////////////////////////////////////
      function view() {
          document.getElementById("val1").innerHTML= document.getElementById("list").value;
  var str=  document.getElementById("list").value;
  //alert(str);
//  if (str=="") {
//    document.getElementById("txtview").innerHTML="";
//   // document.getElementById("resultsave").innerHTML="";
//    return;
//  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtview").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","view.php?col2_data="+str,true);
  xmlhttp.send();
}
    //////////////////////////
     /////////////////////////////////////
       
     
    function edit(str) {
 
  if (str=="") {
    document.getElementById("text_result").innerHTML="";
   // document.getElementById("resultsave").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("text_result").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","edit.php?id="+str,true);
  xmlhttp.send();
}
    
    
    /////////////////////////////////////////////
      function save(str1) {
       var str2=      document.getElementById("txt_save").value;
  if (str1=="") {
    document.getElementById("text_result").innerHTML="";
   // document.getElementById("resultsave").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("text_result").innerHTML=this.responseText;
       //document.getElementById("txtview").innerHTML="";

   view();
    }
  }
  xmlhttp.open("GET","edit_in.php?id="+str1+"&txt="+str2,true);
  xmlhttp.send();

}
    
 function del(str) {
     if (confirm('Are you sure you want to delet?')) {
  // Save it!
 

     
     
     
     
     
     
     
     
     
     
     
     
  if (str=="") {
    document.getElementById("text_result").innerHTML="";
   // document.getElementById("resultsave").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("text_result").innerHTML=this.responseText;
      view();
    }
  }
  xmlhttp.open("GET","delet.php?id="+str,true);
  xmlhttp.send();
  
  } else {
  // Do nothing!
 
}
}
 
</script>
<script>
   
 ////////////////////////////
 function new_1() {
  
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("text_result").innerHTML=this.responseText;
      document.getElementById("txt").focus();
      
    }
  }
  xmlhttp.open("GET","new.php",true);
  xmlhttp.send();
}
 </script>
<script>   
    //////////////////////////////////////////////////////////////////////
   function new_save() {
    str= document.getElementById("txt").value;
       str2= document.getElementById("list").value;
 
  if (str=="") {
    document.getElementById("text_result").innerHTML="";
   // document.getElementById("resultsave").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("text_result").innerHTML=this.responseText;
     document.getElementById("txtview").innerHTML="";
            view();
    }
  }
  xmlhttp.open("GET","new_in.php?txt="+str+"&txt2="+str2,true);
  xmlhttp.send();
}  
  
      view();
</script>
 
     <script type="text/javascript"> 
        function stopRKey(evt) { 
          var evt = (evt) ? evt : ((event) ? event : null); 
          var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
          if ((evt.keyCode == 13) && (node.type=="text"))  {
              
            document.getElementById("new_save").click();
            
            return false;
        
        } 
        } 

        document.onkeypress = stopRKey; 

        </script>
</body>
</html>