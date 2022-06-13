<html>
<?php
session_start();
$status="";
if (isset($_POST['ID']) && $_POST['ID']!=""){
$ID = $_POST['ID'];
$result = mysqli_query($conn,"SELECT * FROM `menu` WHERE `ID`='$ID'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$ID = $row['ID'];
$Price = $row['Price'];
$image = $row['image'];

$cartArray = array(
	$ID=>array(
	'name'=>$name,
	'ID'=>$ID,
	'Price'=>$Price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = 'alert("cart is empty")';
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($ID,$array_keys)) {
		$status = '<script>alert("Product is already added to your cart!")</script>';	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status =  '<script>alert("Product is  added to your cart!")</script>';
	}

	}
}

$cart_count=0;  
if(!empty($_SESSION["shopping_cart"])) 
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<div class="cart">

<?php
if(isset($_SESSION["shopping_cart"])){
    $total_Price = 0;
}

?>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</html>