<!doctype html>
<?php
$servername = "localhost";
$usernam="root";
$password="";
$dbname="insurance";
$pcode="";
$fname="";
$mname="";
$lname="";
$age="";
$address="";
$gender="";
$salary="";
$phone="";
$email="";
$username="";
$password="";
$cname="";
$cphone="";
$cdob="";
$cgender="";
$relation="";
$bname="";
$accountnum="";


 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 
//connect to mysql database
try{
$conn =mysqli_connect($servername,$usernam,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
echo("error in connecting");
}
//get data from the form
function getData()
{
$data = array();
$data[0]=$_POST['pcode'];
$data[1]=$_POST['fname'];
$data[2]=$_POST['mname'];
$data[3]=$_POST['lname'];
$data[4]=$_POST['age'];
$data[5]=$_POST['address'];
$data[6]=$_POST['gender'];
$data[7]=$_POST['salary'];
$data[8]=$_POST['phone'];
$data[9]=$_POST['email'];
$data[10]=$_POST['username'];
$data[11]=$_POST['password'];
$data[12]=$_POST['cname'];
$data[13]=$_POST['cphone'];
$data[14]=$_POST['cdob'];
$data[15]=$_POST['cgender'];
$data[16]=$_POST['relation'];
$data[17]=$_POST['bname'];
$data[18]=$_POST['accountnum'];


return $data;
}
//search
if(isset($_POST['search']))
{
$info = getData();
$search_query="SELECT * FROM form  WHERE pcode = '$info[0]'";
$search_result=mysqli_query($conn, $search_query);
if($search_result)
{
if(mysqli_num_rows($search_result))
{
while($rows = mysqli_fetch_array($search_result))
{
$pcode = $rows['pcode'];
$fname = $rows['fname'];
$mname = $rows['mname'];
$lname = $rows['lname'];
$age = $rows['age'];
$address = $rows['address'];
$gender = $rows['gender'];
$salary = $rows['salary'];
$phone = $rows['phone'];
$email = $rows['email'];
$username = $rows['username'];
$password = $rows['password'];
$cname = $rows['cname'];
$cphone = $rows['cphone'];
$cdob = $rows['cdob'];
$cgender = $rows['cgender'];
$relation= $rows['relation'];
$bname = $rows['bname'];
$accountnum = $rows['accountnum'];


 
}
}else{
echo("no data are available");
}
} else{
echo("result error");
}
 
}
//insert
if(isset($_POST['insert'])){
$info = getData();
$insert_query="INSERT INTO `form`(`fname`, `mname`,`lname`,`age`, `address`,`gender`,`salary`, `phone`,`email`,`username`, `password`,`cname`,`cphone`, `cdob`,`cgender`,`relation`, `bname`,`accountnum`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]','$info[13]','$info[14]','$info[15]','$info[16]','$info[17]','$info[18]')";
try{
$insert_result=mysqli_query($conn, $insert_query);
if($insert_result)
{
if(mysqli_affected_rows($conn)>0){
echo("data inserted successfully");
 
}else{
echo("data are not inserted");
}
}
}catch(Exception $ex){
echo("error inserted".$ex->getMessage());
}
}
//delete
if(isset($_POST['delete'])){
$info = getData();
$delete_query = "DELETE FROM `form` WHERE pcode = '$info[0]'";
try{
$delete_result = mysqli_query($conn, $delete_query);
if($delete_result){
if(mysqli_affected_rows($conn)>0)
{
echo("data deleted");
}else{
echo("data not deleted");
}
}
}catch(Exception $ex){
echo("error in delete".$ex->getMessage());
}
}
//edit
if(isset($_POST['update'])){
$info = getData();
$update_query="UPDATE `form` SET `fname`='$info[1]',mname='$info[2]',lname='$info[3]',`age`='$info[4]',address='$info[5]',gender='$info[6]',salary='$info[7]',phone='$info[8]',email='$info[9]',username='$info[10]',password='$info[11]',cname='$info[12]',cphone='$info[13]',cdob='$info[14]',cgender='$info[15]',relation='$info[16]',bname='$info[17]',accountnum='$info[18]' WHERE pcode = '$info[0]'";
try{
$update_result=mysqli_query($conn, $update_query);
if($update_result){
if(mysqli_affected_rows($conn)>0){
echo("data updated");
}else{
echo("data not updated");
}
}
}catch(Exception $ex){
echo("error in update".$ex->getMessage());
}
}
 
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
<form method ="post" action="pholderbasic_update.php">
<input type="number" name="pcode" placeholder="Pcode" value="<?php echo($pcode);?>"><br><br>
<input type="text" name="fname" placeholder="First Name" value="<?php echo($fname);?>"><br><br>
<input type="text" name="mname" placeholder="Middle name" value="<?php echo($mname);?>"><br><br>
<input type="text" name="lname" placeholder="Last name" value="<?php echo($lname);?>"><br><br>
<input type="number" name="age" placeholder="Age" value="<?php echo($age);?>"><br><br>
<input type="text" name="address" placeholder="Address" value="<?php echo($address);?>"><br><br>
<input type="text" name="gender" placeholder="Gender" value="<?php echo($gender);?>"><br><br>
<input type="number" name="salary" placeholder="Salary" value="<?php echo($salary);?>"><br><br>
<input type="number" name="phone" placeholder="Phone" value="<?php echo($phone);?>"><br><br>
<input type="text" name="email" placeholder="Email" value="<?php echo($email);?>"><br><br>
<input type="text" name="username" placeholder="Username" value="<?php echo($username);?>"><br><br>
<input type="text" name="password" placeholder="Password" value="<?php echo($password);?>"><br><br>
<input type="text" name="cname" placeholder="Claimant Name" value="<?php echo($cname);?>"><br><br>
<input type="number" name="cphone" placeholder="Claimant Phone" value="<?php echo($cphone);?>"><br><br>
<input type="text" name="cdob" placeholder="Claimant DOB" value="<?php echo($cdob);?>"><br><br>
<input type="text" name="cgender" placeholder="Claimant Gender" value="<?php echo($cgender);?>"><br><br>
<input type="text" name="relation" placeholder="Relation" value="<?php echo($relation);?>"><br><br>
<input type="text" name="bname" placeholder="Bank Name" value="<?php echo($bname);?>"><br><br>
<input type="number" name="accountnum" placeholder="Account Number" value="<?php echo($accountnum);?>"><br><br>













<div>

<input type="submit" name="update" value="Update">

 
</div>
</form>
</body>
</html>
