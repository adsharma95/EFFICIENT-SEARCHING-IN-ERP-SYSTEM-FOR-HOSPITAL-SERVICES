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
		$output.='</table><tr>Qty:<input type="number" name="quantity" id="quantity" /></tr></div></div>
<div class="modal-footer">
	    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button class="btn btn-warning" id="cart'.$row['id'].'" name="'.$row['id'].'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
		<script>$("#cart'.$row['id'].'").click(function(){
			var product_id = $(this).attr("name");
			var qty = $("#quantity").val();
			alert("Your Product has been added to cart !!");
			$.ajax({
				url:"carttest.php",
				data:{product_id:product_id,qty:qty},
				success:function(data)
				{
					$("#cart_details").append(data);
				}
			});
			$("#dataModal").modal("hide");
		});</script>';
		
	}
	$output.="</table></div>";
	echo $output;
	
		
}
?>


	