


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Enter Roll Number</title>

<style type="text/css">

.resultimg{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    opacity: 0.8;
    filter: alpha(opacity=50);
}

/*.style1 {

	font-size: 36px;

	font-weight: bold;
    
	color:#fff;
	
	margin-top:-5px;
}*/

body{
     background-image: url("formwall.jpg");
}
.resultdiv{
  margin-top: 50px;
  margin-left:400px;
 width: 500px;
    height: 330px;
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

<script type="text/JavaScript">

<!--

function MM_findObj(n, d) 

{ //v4.01

  var p,i,x;  

  if(!d) d=document; 

  if((p=n.indexOf("?"))>0&&parent.frames.length) 

  {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);

  }

  if(!(x=d[n])&&d.all) x=d.all[n]; 

  for (i=0;!x&&i<d.forms.length;i++)  

               x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) 

               x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) 

               x=d.getElementById(n); 

  return x;

}

function MM_validateForm() 

{ //v4.0

  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;

  for (i=0; i<(args.length-2); i+=3) 

  { 

   test=args[i+2]; 

   val=MM_findObj(args[i]);

   if (val) 

   { 

    nm=val.name; 

    if ((val=val.value)!="") 

    {

      if (test.indexOf('isEmail')!=-1) 

      { 

       p=val.indexOf('@');

       if (p<1 || p==(val.length-1)) 

               errors+='- '+nm+' must contain an e-mail address.\n';

      } 

      else if (test!='R') 

      { 

        num = parseFloat(val);

        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';

        if (test.indexOf('inRange') != -1) 

        { 

          p=test.indexOf(':');

          min=test.substring(8,p); max=test.substring(p+1);

          if (num<min || max<num) 

              errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';

        } 

      } 

    } 

    else if (test.charAt(0) == 'R') errors += 'Enter Roll Number\n'; 

   }

  } 

  if (errors) alert('\n'+errors);

  document.MM_returnValue = (errors == '');

}

//-->

</script>

</head>



<body>


  <!-- <table width="734" border="0" align="center">

    <tr>

      <td width="734" align="center" valign="middle"><div align="center"> <img  class="resultimg" src="./img/about1.png" width="600px" height="100px"></div></td>

    </tr>
  
    <tr>

      <td width="734" align="center" valign="middle"><div align="center"><strong><font color="#0066CC" size="6">Saint institute of technology</font></strong> </div></td>

    </tr>

    
  </table>

</div>

<p align="center" color="#fff" class="style1" >RESULT</p>

<p>&nbsp;</p>



<form id="form1" name="form1" method="get" action="resultdisplay.php">

  <table width="390" border="1" align="center">



  <tr>

    <td width="119">Exam Name</td>





    <td width="371">



       <select name="exam_name">

	<option value="">Select Exam</option>



    
        
        <option value="PGDCA">Post Graduate Diploma  III sem</option>
		<option value="PGDCA">Diploma in Computer Application VI sem</option>
		<option value="PGDCA"> Advance Diploma in Computer Applications  IV sem</option>
		<option value="PGDCA">Post Graduate Diploma  II sem </option>
		<option value="PGDCA">Diploma in Computer Application V sem</option>
		<option value="PGDCA">Post Graduate Diploma  VI sem</option>
		<option value="PGDCA"> Advance Diploma in Computer Applications  I sem</option>
		<option value="PGDCA">Diploma in Computer Application V sem</option>
		<option value="PGDCA"> Advance Diploma in Computer Applications  II sem</option>
		<option value="PGDCA">PGDCA VI sem</option>



        
     </select>



     </td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><a href="#" target="_blank" class="style2">Other Results </a></td>

  </tr>





    <tr>

      <td width="148"><strong>Enter Your Roll No </strong></td>

      <td width="144"><label>

        <input name="number" type="text" id="number" />

      </label></td>

      <td width="76" align="center"><label>

        <input name="Submit" type="submit" onClick="MM_validateForm('number','','RisNum');return document.MM_returnValue" value="Submit" />



      </label></td>

    </tr>



  </table>





  

</form>







<p>&nbsp;</p>

<p>&nbsp;</p>

<p align="center">&nbsp;</p>

<p>&nbsp;</p>
 -->
</br>
<div align="center"> <img  class="resultimg" src="./img/about1.png" width="600px" height="100px"></div>
</br>
</br>
  <div class="resultdiv" align="center"> 
      <head><b><font size="5px" style="font-family:Calibri">&nbsp;&nbsp;&nbsp;&nbsp;EXAMINATION RESULTS</font></b></head>
           <form class="formlogin" action="resultsubmit.php" method="post">
  <label class="alable1" style="font-family:Calibri"> <b>Select Examination </b> </label></br>
    <select name="exam_name" id ="exam_name" class="selector">
    <option >Select Exam</option>



    
        
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
  </br>
  </br>
  <label class="alable1" style="font-family:Calibri"><b>Enter ID </b></label></br>
  <input class="alable2" placeholder="..." type="text" name="ID1" ></br>
 <a href="#" target="_blank" class="button1" type="other" margin=10px style="font-family:Calibri">Other</a>
 <input class="button1" margin=10px type="submit" style="font-family:Calibri" onClick="MM_validateForm('number','','RisNum');return document.MM_returnValue" value="Submit">
</br>
</form> 
 <a href="admindata.php?" target="_blank" class="button1" type="other" margin=10px style="font-family:Calibri">Course-wise List of Results</a>

        </div>


</body>


</html>



