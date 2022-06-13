<?php
include "adminheader.php";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "test1";
$conn=mysqli_connect($servername,$username,$password,$DB);
if(!$conn)
{
  die("connection failed".mysqli_connect_error());
}

//delete:
if(isset($_POST['Delete']))
{
  $ID=$_POST['ID'];
  $parent_menu=$_POST['parent_menu'];
  $image = $_POST['image'];
  $name=$_POST['name'];
  $description=$_POST['description'];
  $Price=$_POST['Price'];
  $quantity=$_POST['quantity'];
  $Rating = $_POST['Rating'];
  $DELETE="DELETE FROM menu WHERE ID='$ID'";
  if($conn->query($DELETE)===true)
  {
  echo "Record deleted successfully";
} 
else
 {
  echo "Error deleting record: " . $conn->error;
}
}

//EDIT:
if(isset($_POST['Edit']))
{
  $ID=$_POST['ID'];
  $parent_menu=$_POST['parent_menu'];
  $image = $_POST['image'];
  $name=$_POST['name'];
  $description=$_POST['description'];
  $Price=$_POST['Price'];
  $quantity=$_POST['quantity'];
  $Rating = $_POST['Rating'];
  $EDIT="UPDATE  menu set name='$name', parent_menu='$parent_menu',image='$image', description='$description', Price ='$Price', Rating ='$Rating' WHERE ID='$ID'";
  if($conn->query($EDIT)===true)
  {
  echo "Record updated successfully";
} 
else
 {
  echo "Error updating record: " . $conn->error;
}
}

//SEARCH:
if(isset($_POST['Search']))
{
  $ID=$_POST['ID'];
  $parent_menu=$_POST['parent_menu'];
  $image = $_POST['image'];
  $name=$_POST['name'];
  $description=$_POST['description'];
  $Price=$_POST['Price'];
  $quantity=$_POST['quantity'];
  $Rating = $_POST['Rating'];
  $sql="SELECT * from menu WHERE ID='$ID'";
  $result = mysqli_query($conn,$sql);
  echo"<table >

  <tr>
  
	<th>ID</th>
  <th>Parent</th>
  <th>image </th>
	<th>Name</th>
	<th>Description</th>
  <th>Price</th>
	<th>Quantity</th>
  <th>Rating</th>
  
    
       
  </tr>";
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
}
?>
<html>
<link rel="stylesheet" type="text/css" href="Menuedit.css">

 <form action=" " method="post">
 <br> <br> <br> <br>
<label for="ID">ID</label>
<input type="text" placeholder="ID" name="ID">

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

  <button type="submit"name="Edit" >Edit</button>
  <button type="submit"name="Delete" >Delete</button>  
  <button type="submit"name="Search" >Search</button> 
  <br> <br> <br> <br>
</form>


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