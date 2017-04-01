<?php
if(isset($_GET['product_id']))
{
	$qty=$_GET['qty'];
	$output='';
	$connect = mysqli_connect("localhost","root","","medistore");
	$query="select * from ayurvedic where id='".$_GET['product_id']."'";
	$result=mysqli_query($connect,$query);
	
	while($row=mysqli_fetch_array($result))
	{
		$output.='<tr><td >'.$row['Name'].'</td>
		<td >'.$qty.'</td><td>'.$row['Price'].'</td><td>'.$qty*$row['Price'].'</td><td><button type="button" class="btn btn-danger" id="remove'.$row['id'].'">REMOVE</button></td></tr>
		<script>$("#remove'.$row['id'].'").click(function()
		{
			$(this).closest("tr").remove();
		});</script>';
		
	}
	$output.='</table></div>';
	echo $output;
}
else
{
	echo "wrong";
}
?>
