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
$sql="INSERT INTO saintform(Fname,Lname, Birthday_day, Birthday_month, Birthday_year, Email, Gender, Address, City, Pin_code, State, Country, Hobby_drawing, Hobby_singing, Hobby_dancing, Hobby_cooking, Hobby_other, Other_hobby, Course) VALUES('$_POST[fname]','$_POST[lname]','$_POST[Birthday_day]','$_POST[Birthday_month]','$_POST[Birthday_year]','$_POST[email]','$_POST[Gender]','$_POST[Address]','$_POST[City]','$_POST[Pin_Code]','$_POST[State]','$_POST[Country]','$_POST[Hobby_Drawing]','$_POST[Hobby_Singing]','$_POST[Hobby_Dancing]','$_POST[Hobby_Cooking]','$_POST[Hobby_Other]','$_POST[Other_Hobby]','$_POST[Course]')";
if ($conn->query($sql) === TRUE) {
   echo "<script>alert('Mail sent successfully');</script>";
	header('location:form.html');
} else {
    echo "<script>alert('Mail not sent successfully, please resend it');</script>";
	header('location:form.html');

}
$conn->close();
?>
</body>
</html>                                                                          
