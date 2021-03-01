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
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$salary=$_POST['salary'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$cname=$_POST['cname'];
$cphone=$_POST['cphone'];
$cdob=$_POST['cdob'];
$cgender= $_POST['cgender'];
$relation=$_POST['relation'];
$bname = $_POST['bname'];
$accountnum = $_POST['accountnum'];
$register_query ="INSERT INTO `form`(`pcode`, `fname`, `mname`, `lname`,`age`, `address`, `gender`,`salary`, `phone`, `email`, `username`, `password`, `cname`, `cphone`, `cdob`, `cgender`, `relation`, `bname`, `accountnum`) VALUES ('$pcode','$fname','$mname','$lname','$age','$address','$gender','$salary','$phone','$email','$user','$pass','$cname','$cphone','$cdob','$cgender','$relation','$bname','$accountnum')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
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


<h2>Registration Form for NEW POLICY HOLDER</h2>
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
<td>Name:</td>
<td><input type="text" name="fname" placeholder="enter your first name"></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="mname" placeholder="enter your middle name"></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="lname" placeholder="enter your last name"></td>
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
<td>Age:</td>
<td><input type="phone" name="age" placeholder="enter your age"></td>
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
<td>Address</td>
<td><input type="text" name="address" placeholder="enter your address"></td>
</tr>
<tr>
<td>Gender</td>
 
 
<td><input type="radio" name="gender" value="Male">Male</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="others">others</td>
</tr>





<tr>
<td>Salary:</td>
<td><input type="phone" name="salary" placeholder="enter your salary"></td>
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
<td>Phone:</td>
<td><input type="tel" name="phone" placeholder="enter your phone no"></td>
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
<td>email:</td>
<td><input type="email" name="email" placeholder="example@example.com"></td>
 
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
<td>username:</td>
<td><input type="text" name="username" placeholder="enter your username"></td>
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
<td>password:</td>
<td><input type="password" name="password" value="admin"></td>
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
<td>Claimant Name:</td>
<td><input type="text" name="cname" placeholder="enter your claimant name"></td>
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
<td>Claimant Phone No:</td>
<td><input type="phone" name="cphone" placeholder="enter your claimant phone number"></td>
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
<td>Claimant DOB:</td>
<td><input type="text" name="cdob" placeholder="enter your claimant dob"></td>
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
<td>Claimant Gender</td>
 
 
<td><input type="radio" name="cgender" value="Male">Male</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="cgender" value="female">Female</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="cgender" value="others">others</td>
</tr>
<tr>





<tr>
<td>Relation:</td>
<td><input type="text" name="relation" placeholder="enter your relation with claimant"></td>
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
<td><input type="text" name="bname" placeholder="enter bank name"></td>
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
<td>Account No:</td>
<td><input type="text" name="accountnum" placeholder="enter your account number"></td>
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
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
</table>
</form>
</body>
</html>