<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>All Results</title>

</head>
<style type="text/css">

body{
   /*  background-image: url("formwall.jpg");*/
}
.resultdiv{
  margin-top: 50px;
  margin-left:400px;
 width: 500px;
    height: 150px;
    background: rgba(192, 192, 192, 0.5);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.alable1{
    margin:5px;    
padding:5px;
font-size:20px;
color:#000; 
    
}
.alable2{
padding:7px;
margin-left: 5px;
font-size:18px;
color:#000; 
height:30px;    
width:250px;   
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 border:1px solid; 
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
.selector{
  padding: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:1px solid;
  font-size:15px; 
}

</style>

<body>





           <div class="resultdiv" align="center"> 
           <form class="formlogin" action="admindata.php" method="post">
 <label class="alable1" style="font-family:Calibri"> <b>Select Examination </b> </label></br>
    <select name="exam_name" class="selector">
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

</html>



