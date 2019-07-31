
  <table border="3">

<tr> 

<th> Book Name </th>
<th> ID </th>
<th> PRICE </th>
</tr>

<?php

$con=mysqli_connect('localhost','root','','project1');
$set=$_POST['search'];
if($set)
{
	$sql = "Select * FROM infor where Book='$set'";
	$res = mysqli_query($con,$sql);
    while($rows=mysqli_fetch_assoc($res))
	

	{		
        echo "<tr>";
        echo "<td>";		
		echo $rows["Book"];
		 echo "</td>";
		  echo "<td>";
		echo $rows["Id"];
		 echo "</td>";
		  echo "<td>";
		echo $rows["Price"];
		 echo "</td>";
		  echo "</tr>";
		
		echo "</br>";
	}
}
else
{
	echo "Nothing Found";
}
	
?>
</table>