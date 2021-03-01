<style>  
   *{       font-family: 'Josefin Sans', sans-serif;     }

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









<table border="1">
      <tr>
	       <th>pcode</th>
		   <th>fname</th>
		   <th>mname</th>
		    <th>lname</th>
		   <th>age</th>
		   <th>address</th>
		    <th>gender</th>
		   <th>salary</th>
		   <th>phone</th>
		    <th>email</th>
		   <th>username</th>
		   <th>password</th>
		    <th>cname</th>
		   <th>cphone</th>
		   <th>cdob</th>
		    <th>cgender</th>
		   <th>relation</th>
		   <th>bname</th>
		    <th>accountnum</th>
		  </tr>
		 



<?php
$conn=mysqli_connect("localhost","root","","insurance");
$set=$_POST['search'];
if($set){
	$show="SELECT *FROM form where pcode='$set'";
	$result=mysqli_query($conn,$show);
	while($rows=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>";
       echo $rows['pcode'];
	   echo "</td>";
       echo "<td>";
       echo $rows['fname'];
	   echo "</td>";
	    echo "<td>";
       echo $rows['mname'];
	    echo "</td>";
       echo "<td>";
       echo $rows['lname'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['age'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['address'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['gender'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['salary'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['phone'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['email'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['username'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['password'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['cname'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['cphone'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['cdob'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['cgender'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['relation'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['bname'];
	    echo "</td>";
		
		 echo "<td>";
       echo $rows['accountnum'];
	   echo "</td>";
	   
	   echo "</tr>";
      echo "</br>";
	}	  
}
else{
	echo "nothing found";
}
?>
 </table>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
