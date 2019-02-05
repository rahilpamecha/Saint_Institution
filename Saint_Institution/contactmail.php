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
$sql="INSERT INTO contactdone(Name, Email, Subject, Message) VALUES('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
if ($conn->query($sql) === TRUE)
 {
   echo "<script>alert('Mail sent successfully');
        window.location.href='contact.html';

   </script>";
   
} else 
{
    echo "<script>alert('Mail not sent successfully, please resend it');</script>.$conn->error";
}
$conn->close();
	
?>
</body>
</html>     