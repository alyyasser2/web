<html>
<?php
session_start();
$status="";

if (isset($_POST['action']) && $_POST['action']=="remove"){
	foreach($_SESSION["shopping_cart"] as $key=>$value){
	  if($value['ID'] === $_POST["ID"]){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		  break; 
	  }
	}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['ID'] === $_POST["ID"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" >
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row" >
        <div style="background-color:rgb(22, 22, 22);"class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" >
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6" style="color:orange;">
                    <address>
                        <strong>Grand Restaurant</strong>
                        <br>
                       
                        <abbr title="Phone" style="color:orange;">P:</abbr> (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right"style="color:orange;">
                    <p>
                        <em><p id="demo"></p>

<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script></em>
                    </p>
                    <p>
                        <em style="color:orange;">Receipt #: 34522677W</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <?php
            if(isset($_SESSION["shopping_cart"])){
    $total_Price = 0;
?>	
                <div class="text-center" style="color:orange;">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover" style="color:orange;">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>QUANTITY</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-center">ITEMS Total</th>
                            <?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           
                        
                            <td class="col-md-9" style="background-color:rgb(22, 22, 22);">
                            <img src='<?php echo $product["image"]; ?>' width="50" height="40" /><em>
                                <?php echo $product["name"]; ?></em></h4>
                                <form method='post' action='cancelorder.php'>
<input type='hidden' name='ID' value="<?php echo $product["ID"]; ?>" />
<input type='hidden' name='action' value="remove" />
<form action="cancelorder.php"method="post">
<button type='submit' class='remove' style="background-color:orange; ">Remove Item</button>
</form></td>
                                
                            <td  style="background-color:rgb(22, 22, 22);"class="col-md-1" style="text-align: center" > <form method='post' action=''>
<input type='hidden' name='ID' value="<?php echo $product["ID"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' style="background-color:orange;" class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form></td>
                            <td class="col-md-1 text-center" style="background-color:rgb(22, 22, 22);"><?php echo "$".$product["Price"]; ?></td>
                            <td class="col-md-1 text-center" style="background-color:rgb(22, 22, 22);"><?php echo "$".$product["Price"]*$product["quantity"]; ?></td>
                        </tr>
                        <?php
$total_Price += ($product["Price"]*$product["quantity"]);
}
?>

                        <tr>
                            <td>
							
						</td>
                            <td>    </td>
                            <td class="text-right" style="background-color:rgb(22, 22, 22);"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"style="color:orange; background-color:rgb(22, 22, 22); " ><h4><strong> <?php echo "$".$total_Price; ?></strong></h4></td>
                            <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
                        </tr>
                       
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block"  style="background-color:orange; color:rgb(22, 22, 22);">
                    Pay Now  Using <span style="color:black;" class="glyphicon glyphicon-chevron-down">
				</span>
                </button>
				<button class="btn btn-success btn-lg btn-block" style=" color:rgb(22, 22, 22);"onclick="window.location.href='editorder.php'">Cash</button>
                <button class="btn btn-success btn-lg btn-block" style=" color:rgb(22, 22, 22); "onclick="window.location.href='checkout.php'">Visa</button>
</td>
            </div>
        </div>
    </div>
    <style>
        body {
    margin-top: 20px;
	background-color: rgb(22, 22, 22);
}

    </style>
	<title>Receipt</title>
</html>