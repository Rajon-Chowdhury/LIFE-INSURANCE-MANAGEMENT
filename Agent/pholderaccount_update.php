<!doctype html>
<?php
$servername = "localhost";
$usernam="root";
$password="";
$dbname="insurance";
$pcode="";
$bname="";
$bid="";
$pamount="";
$installment="";
$count="";
$date="";

 
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
$data[1]=$_POST['bname'];
$data[2]=$_POST['bid'];
$data[3]=$_POST['pamount'];
$data[4]=$_POST['installment'];
$data[5]=$_POST['count'];
$data[6]=$_POST['date'];


return $data;
}
//search
if(isset($_POST['search']))
{
$info = getData();
$search_query="SELECT * FROM money  WHERE pcode = '$info[0]'";
$search_result=mysqli_query($conn, $search_query);
if($search_result)
{
if(mysqli_num_rows($search_result))
{
while($rows = mysqli_fetch_array($search_result))
{
$pcode = $rows['pcode'];
$bname = $rows['bname'];
$bid = $rows['bid'];
$pamount= $rows['pamount'];
$installment = $rows['installment'];
$count = $rows['count'];
$date= $rows['date'];

 
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
$insert_query="INSERT INTO `money`(`pcode`,`bname`, `bid`,`pamount`,`installment`, `count`,`date`) VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]')";
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
$delete_query = "DELETE FROM `money` WHERE pcode = '$info[0]'";
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
$update_query="UPDATE `money` SET `bname`='$info[1]',bid='$info[2]',pamount='$info[3]',installment='$info[4]',count='$info[5]',date='$info[6]'  WHERE pcode = '$info[0]'";
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
<form method ="post" action="pholderaccount_update.php">
<input type="number" name="pcode" placeholder="Pcode" value="<?php echo($pcode);?>"><br><br>
<input type="text" name="bname" placeholder="Bank Name" value="<?php echo($bname);?>"><br><br>
<input type="number" name="bid" placeholder="Bank Id" value="<?php echo($bid);?>"><br><br>
<input type="number" name="pamount" placeholder="Policy Amount" value="<?php echo($pamount);?>"><br><br>
<input type="number" name="installment" placeholder="Installment" value="<?php echo($installment);?>"><br><br>
<input type="number" name="count" placeholder="Payment Count" value="<?php echo($count);?>"><br><br>
<input type="text" name="date" placeholder="Date" value="<?php echo($date);?>"><br><br>
<div>
<input type="submit" name="insert" value="Add">
<input type="submit" name="delete" value="Delete">
<input type="submit" name="update" value="Update">

 
</div>
</form>
</body>
</html>
