<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="insurance";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$pcode=$_POST['pcode'];
$bname=$_POST['bname'];
$bid=$_POST['bid'];
$pamount=$_POST['pamount'];
$installment=$_POST['installment'];
$count=$_POST['count'];
$date=$_POST['date'];

$register_query ="INSERT INTO `money`(`pcode`, `bname`, `bid`, `pamount`,`installment`, `count`, `date`) VALUES ('$pcode','$bname','$bid','$pamount','$installment','$count','$date')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("   Transaction successful");
}else{
echo("error in Transaction");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>
<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style>     *{       font-family: 'Josefin Sans', sans-serif;     }

body{
background-color:#FFFFCC;
}



#logo1{
width:102%;
border:solid 2px black;
text-align:center;
background-color:green;
margin-top:-7px;
margin-left:-10px;
}

#logo2{
border:solid 1px black;
width:100%;
text-align:center;
}

#logo3{
text-align:left;
}

#logo5{
width:33.33%;
}

#n1 {margin-top:-200px;}
#n2{margin-top:-60px;}
#n3{margin-top:-40px;}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:50px;
}
</style>
 
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
	<a class="navbar-brand" href="#">Welcome</a>
  </div>
</nav>

<div style="height: 50px"></div>


<h2>Money Transaction Form</h2>
<b>Please Enter The Following Details:</b>
<form action="" method="post">
<table align="center">



<tr>
<td>Pin Code:</td>
<td><input type="phone" name="pcode" placeholder="enter your pin code"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>




















<tr>
<td>Bank Name:</td>
<td><input type="text" name="bname" placeholder="enter your Bank Name"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>












<tr>
<td>Bank ID No:</td>
<td><input type="phone" name="bid" placeholder="enter your Bank ID"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>





<tr>
<td>Policy Amount</td>
<td><input type="phone" name="pamount" placeholder="enter your policy amount"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>













<tr>
<td>Installment:</td>
<td><input type="tel" name="installment" placeholder="enter your installment"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>

<tr>
<td>Count:</td>
<td><input type="phone" name="count" placeholder="enter your count"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>Date:</td>
<td><input type="text" name="date" placeholder="enter date"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
















<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>