<?php

$con=mysqli_connect('localhost','root','','project1');
?>
<h1> Student Information </h1>


<?php

$sql="select * FROM infor";

$res=mysqli_query($con,$sql);

?>

<html>


  <body>

  <table border="5">

<tr> 

<th> Book Name </th>
<th> ID </th>
<th> PRICE </th>
</tr>




<?php



while($row=mysqli_fetch_assoc($res))
	
 


	{	
?>
<tr>
	
		<td><?php echo $row["Book"]; ?></td>
		<td><?php echo $row["Id"]; ?></td>
		<td><?php echo $row["Price"]; ?></td>
		
		
	
		 
		 </tr><?php
	}


?>

</table>

</body> 
</html>

