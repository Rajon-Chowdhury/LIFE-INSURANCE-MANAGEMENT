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
	       <th>Pincode</th>
		   <th>Bank Name</th>
		   <th>Bank ID No</th>
		   <th>Policy Amount</th>
		   <th>Installment</th>
		    <th>Count</th>
			 <th>Last Payment Date</th>
			  <th>Total Payment</th>
		   <th>Remaing Payment</th>
		  
		  </tr>
		 



<?php
$conn=mysqli_connect("localhost","root","","insurance");
$set=$_POST['search'];
if($set){
	$show="SELECT *FROM money where pcode='$set'";
	$result=mysqli_query($conn,$show);
	while($rows=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>";
       echo $rows['pcode'];
	   echo "</td>";
       echo "<td>";
       echo $rows['bname'];
	   echo "</td>";
	    echo "<td>";
       echo $rows['bid'];
	    echo "</td>";
       echo "<td>";
       echo $rows['pamount'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['installment'];
	    echo "</td>";
		 echo "<td>";
       echo $rows['count'];
	    echo "</td>";
		 echo "<td>";
		 $y=$rows['date'];
	      echo $y;
	    echo "</td>";
		 echo "<td>";
		$a=$rows['installment'];
		$b=$rows['count'];
	     $c=$a*$b;
		$d=$rows['pamount'];
		$e=$d-$c;
		
		 
       echo $c;
	    echo "</td>";
		 echo "<td>";
       echo $e;
	    echo "</td>";
	
	   
	   echo "</tr>";
      echo "<br/>";
	}	  
}
else{
	echo "nothing found";
}
?>


<p>
  		Want to modify information? <a href="pholderaccount_update.php">Modification</a>
  	</p>





 </table>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
