<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpproject";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id1,name, percent FROM results WHERE course='$_POST[exam_name]'";
$result = $conn->query($sql);
?>
<!DOCTYPE>
<HTML>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
body{
    background-color: #FAF0E6 ;
  font-family:Calibri;
}
.button1 {
    background-color: #2e0b16;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    padding:10px;
    margin-top: 30px;
    margin-left: 10px;
    cursor: pointer;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   
}
input[type=submit]:hover {
    background-color: #000000;
}
input[type=other]:hover {
    background-color: #000000;
}
.alable1{
    margin:5px;    
padding:5px;
font-size:20px;
color:#000; 
    
}
.selector{
  padding: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:1px solid;
  font-size:15px; 
}
</style>
</head>
<body>
<div  align="center" class="w3-container" >
<table class="w3-table-all" >
  <tr class="w3-blue">
    <th>ID</th>
    <th>NAME</th> 
    <th>PERCENTAGE</th>
  </tr> 
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <tr>
      <td> <?php echo $row['id1'] ?></td>
            <td> <?php echo $row['name'] ?></td>
                  <td> <?php echo $row['percent'] ?></td>
   </tr>
 
<?php
    }
} 


$conn->close();
?>
</table>
</div>
</br>
 <div class="resultdiv" align="center"> 
           <form class="formlogin" action="admindata.php" method="post">
 <label class="alable1" style="font-family:Calibri"> <b>Select Examination </b> </label></br>
    <select name="exam_name"  class="selector">
    <option value="">Select Exam</option>
    <option value="PGD3">Post Graduate Diploma  III sem</option>
    <option value="BCA6">Bachelor of Computer Application VI sem</option>
    <option value="ADCA4"> Advance Diploma in Computer Applications  IV sem</option>
    <option value="PGD2">Post Graduate Diploma  II sem </option>
    <option value="DCA5">Diploma in Computer Application V sem</option>
    <option value="PGD6">Post Graduate Diploma  VI sem</option>
    <option value="ADCA1"> Advance Diploma in Computer Applications  I sem</option>
    <option value="DCA1">Diploma in Computer Application I sem</option>
    <option value="ADCA2"> Advance Diploma in Computer Applications  II sem</option>
    <option value="MCA6">Master of Computer Application VI sem</option>
    </select>


 <input class="button1" margin=10px type="submit" style="font-family:Calibri" value="Submit">


     </form>

</div>
</body>
 <HTML>
