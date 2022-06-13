<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
?>
<html>
<body>
  

<head>
   <!-- default styles -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

   <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme CSS files as mentioned below (and change the theme property of the plugin) -->
   <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />

   <!-- important mandatory libraries -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

   <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
   <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>

   <!-- optionally if you need translation for your language then include locale file as mentioned below (replace LANG.js with your own locale file) -->
   <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/locales/LANG.js"></script>
</head>
    <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test1";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
    ?>
<head>
<title>Rating</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Rate Your Order</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
?>

<div class="cart">

<table class="table">
  
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>Rate</td>

</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<td > <label for="input-7-sm" class="control-label"></label>
        <input id="input-7-sm" class="rating rating-loading" value="" data-min="0" data-max="5" data-step="1" data-size="sm"><hr/>
      
  </div> </form><br />
<td>
</tr>
<?php
}
?>
<tr>
<td colspan="5" align="right">
<form action="Beef.php" style="margin:10px 230px" >  <button style="color:rgb(22, 22, 22); background-color:orange "><b>Done</b></button</form>
</td>
</tr>
</tbody>
</table>		

</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<br/><br />
</div>
</body>

</body>
<style>
  body{
background-color:rgb(22, 22, 22);
color:orange;
  }
  td{
    color:orange
  }
</style>
</html>