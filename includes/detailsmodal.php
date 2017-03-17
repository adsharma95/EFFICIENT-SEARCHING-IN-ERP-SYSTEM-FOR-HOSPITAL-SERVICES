<!DOCTYPE html>
<?php

if(isset($_POST['product_id']))
{
	$output='';
	$connect = mysqli_connect("localhost","root","","medistore");
	$query="select * from products where id='".$_POST['product_id']."'";
	$result=mysqli_query($connect,$query);
	$output.='<div class="table-responsive">
	<table class="table table-bodered">';
	while($row=mysqli_fetch_array($result))
	{
		$output.='<tr>
		<td > Name</td>
		<td>'.$row['Name'].'</tr>
		<tr>
		<img src="'.$row['image'].'"></tr>
		<tr>
		<td > Price</td>
		<td>'.$row['Price'].'</tr>
		
		<tr>
		<td> Description</td>
		<td>'.$row['Description'].'</tr> 
		<tr>
		<td > featured</td>
		<td>'.$row['featured'].'</tr>';
		
	}
	$output.="</table></div>";
	echo $output;
	
		
}
?>
<div class="modal-footer">
		
		<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
</div>

	