<!doctype html>
<?php
$servername = "localhost";
$usernam="root";
$password="";
$dbname="insurance";
$id="";
$username="";
$email="";
$password="";

 
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
$data[0]=$_POST['id'];
$data[1]=$_POST['username'];
$data[2]=$_POST['email'];
$data[3]=$_POST['password'];

return $data;
}
//search
if(isset($_POST['search']))
{
$info = getData();
$search_query="SELECT * FROM agent  WHERE id = '$info[0]'";
$search_result=mysqli_query($conn, $search_query);
if($search_result)
{
if(mysqli_num_rows($search_result))
{
while($rows = mysqli_fetch_array($search_result))
{
$id = $rows['id'];
$username = $rows['username'];
$email = $rows['email'];
$password = $rows['password'];

 
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
$insert_query="INSERT INTO `agent`(`id`,`username`, `email`,`password`) VALUES ('$info[0]','$info[1]','$info[2]','$info[3]')";
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
$delete_query = "DELETE FROM `agent` WHERE id = '$info[0]'";
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
$update_query="UPDATE `agent` SET `username`='$info[1]',email='$info[2]',password='$info[3]' WHERE id = '$info[0]'";
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
<form method ="post" action="agent_update.php">
<input type="number" name="id" placeholder="id" value="<?php echo($id);?>"><br><br>
<input type="text" name="username" placeholder="Username" value="<?php echo($username);?>"><br><br>
<input type="text" name="email" placeholder="Email" value="<?php echo($email);?>"><br><br>
<input type="text" name="password" placeholder="Password" value="<?php echo($password);?>"><br><br>
<div>

<input type="submit" name="insert" value="Insert">
<input type="submit" name="update" value="Update">
<input type="submit" name="delete" value="Delete">

 
</div>
</form>
</body>
</html>
