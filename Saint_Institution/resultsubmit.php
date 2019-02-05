
<?php
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

$sql = "SELECT name, percent FROM results WHERE course='$_POST[exam_name]' AND  id1='$_POST[ID1]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "<script> alert( "id: " +$row["id"]+ " - Name: " +$row["name"]+ "  " + $row["percent"]);</script>";
           //  echo "<script>alert(' data found ');</script>";
    	// echo  $row["id1"].$row["name"];$row["percent"];
    	// $one= $row["id1"];
    	$two=$row["name"];
    	$three=$row["percent"];
     


    }
} else {
     echo "<script>alert(' no data found ');
     window.location.href = 'result.php';
     </script> 
     ";
}
$conn->close();

?>
  <script>
      // var a = '<?php  $one; ?>';
    var b = '<?php echo $two; ?>'; 
    var c = '<?php echo $three; ?>';                            //must wrap in quotes so that it is still string foo when JS does execute
 alert("   "+b+' Result- '+c); 
window.location.href = 'result.php';                                      //when this DOES execute in the browser, PHP will have already completed all processing and exited
</script>
