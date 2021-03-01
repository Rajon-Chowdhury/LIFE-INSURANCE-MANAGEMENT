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
	       <th>Admin ID</th>
		   <th>Username</th>
		   <th>Email</th>
		    <th>Password</th>
		   
		  </tr>
		 



<?php
$conn=mysqli_connect("localhost","root","","insurance");
$set=$_POST['search'];
if($set){
	$show="SELECT *FROM admin where id='$set'";
	$result=mysqli_query($conn,$show);
	while($rows=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>";
       echo $rows['id'];
	   echo "</td>";
       echo "<td>";
       echo $rows['username'];
	   echo "</td>";
	    echo "<td>";
       echo $rows['email'];
	    echo "</td>";
	    echo "<td>";
       echo $rows['password'];
	    echo "</td>";
       
	   
	   echo "</tr>";
      echo "</br>";
	  
	  
	  
	

  	
	  
	  
	  
	  
	}	  
}
else{
	echo "nothing found";
}
?>

<p>
  		Want to modify information? <a href="admin_update.php">Modification</a>
  	</p>
 </table>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
