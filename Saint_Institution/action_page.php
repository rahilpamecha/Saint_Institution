<html>
<body>
<?php
$servername = "localhost";
$username = "root";                           
$password = "";
$dbname = "phpproject"; 


                                                                   /* $con = mysql_connect("mysql.cis.ksu.edu","cis_id","password","sample"); direct method but given method is more clarified easy to change the connections further to change hosting and database details and bydefault xampp superuser and password is root and *no password */ 
$conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO indexform(fname, lname)
VALUES('$_POST[fname]','$_POST[lname]')";
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
	  echo "<script>alert('Registered successfully');
        window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>                                                                          
