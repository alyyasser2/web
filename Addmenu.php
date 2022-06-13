<?php
include "adminheader.php";
?>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "test1";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['save']))
{
$parent_menu = $_POST['parent_menu'];
$image = $_POST['image'];
$name = $_POST['name'];
$description = $_POST['description'];
$Price = $_POST['Price'];
$quantity = $_POST['quantity'];
$Rating = $_POST['Rating'];
	 $sql = "INSERT INTO menu (parent_menu,image,name,description,Price,quantity,Rating)
	 VALUES ('$parent_menu','$image','$name','$description','$Price','$quantity','$Rating')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

    }

?>
<html>
  <body>
  <link rel="stylesheet" type="text/css" href="Addmenu.css">
	<form method="post" action="">
    <br> <br> <br> <br>
         <label for="parent_menu">Parent</label>
		<input type="text" placeholder="Parent" name="parent_menu">

		<label for="image" >Image </label>
		<input type="file" placeholder="image path" name="image" >

		<label for="name">Name</label>
		<input type="text" placeholder="Name" name="name">

		<label for="description">Description</label>
		<input type="text" placeholder="Description" name="description">
     
		<label for="Price">Price</label>
		<input type="text" placeholder="Price" name="Price">
       
		<label for="quantity">Quantity</label>
		<input type="text" placeholder="Quantity" name="quantity">
        
		<label for="Rating">Rating</label>
		<input type="text" placeholder="Rating" name="Rating">
		<br><br>
        <button type="submit" name="save" > Add Plate </button> 
        <br> <br> <br> <br>
	</form>
  </body>
</html>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM menu";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>

	<th>ID</th>
    <th>Parent</th>
    <th>image </th>
    <th>Name</th>
	<th>Description</th>
    <th>Price</th>
	<th>Quantity</th>
    <th>Rating</th>
    
	 
</tr>
</thead>
</html>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr> 
    <td><?= $row['ID']; ?></td>
    <td><?=  $row['parent_menu']; ?></td>
<td><img src='<?=$row['image'];?>' height="50" width="50" > </img ></td>
	<td><?= $row['name']; ?></td>
	<td><?= $row['description']; ?></td>
    <td><?= $row['Price']; ?> EGP.</td>
	<td><?= $row['quantity']; ?> Plate</td> 
      <td><?= $row['Rating']; ?></td>
</tr>

<?php

}

?>