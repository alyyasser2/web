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
  $Name=$_POST['Name'];
  $Address=$_POST['Address'];
  $Mobile=$_POST['Mobile'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $image = $_POST['image'];
  $DELETE="DELETE FROM registeration WHERE ID='$ID'";
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
  $Name=$_POST['Name'];
  $Address=$_POST['Address'];
  $Mobile=$_POST['Mobile'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $image = $_POST['image'];
  $EDIT="UPDATE  registeration set Name='$Name', Address='$Address', Mobile='$Mobile', Email ='$Email',image ='$image' WHERE ID='$ID'";
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
  $Name=$_POST['Name'];
  $Address=$_POST['Address'];
  $Mobile=$_POST['Mobile'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $image = $_POST['image'];
  $sql="SELECT * from registeration WHERE ID='$ID'";
  $result = mysqli_query($conn,$sql);
  echo"<table >

  <tr>
  
  <th>ID</th>
  <th>Name</th>
  <th>Address</th>
  <th>Mobile</th>
  <th>National_ID</th>
  <th>Email</th>
  <th>Password</th>
  <th>Gender</th>
  <th>Image</th>

    
       
  </tr>";
while($row = mysqli_fetch_array($result)) 
{
  ?>
  <tr>

    <td><?= $row['ID']; ?></td>
	<td><?= $row['Name']; ?></td>
	<td><?=  $row['Address']; ?></td>
	<td><?= $row['Mobile']; ?></td>
    <td><?= $row['National_ID']; ?></td>
	<td><?= $row['Email']; ?></td>
	<td><?=  $row['password']; ?></td>
	<td><?= $row['Gender']; ?></td>
  <td><img src='<?=$row['image'];?>' height="50" width="50" > </img ></td>
  
  </tr>
  <?php
}
}

//ADD:

?>
<html>
<br> <br><br><br>
 <link rel="stylesheet" type="text/css" href="Clientedit.css">

<div id="background2">

 <form action=" " method="post">
<label for="ID">ID</label>
<input type="text" placeholder="ID" name="ID">

<label for="Name">Name</label>
<input type="text" placeholder="Name" name="Name">

<label for="Address">Address</label>
<input type="text" placeholder="Address" name="Address">

<label for="Mobile">Mobile</label>
<input type="text" placeholder="Mobile" name="Mobile">

<label for="Mail">Email</label>
<input type="text" placeholder="Email" name="Email">

<label for="password">password</label>
<input type="text" placeholder="password" name="password">

  <button type="submit"name="Edit" >Edit</button>
  <button type="submit"name="Delete" >Delete</button>  
  <button type="submit"name="Search" >Search</button> 
  <br> <br><br><br><br><br><br>
</form>
</div> 

</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM registeration";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
<table class="table ">
<thead>
<tr>

	<th>ID</th>
	<th>Name</th>
	<th>Address</th>
	<th>Mobile</th>
  <th>National_ID</th>
	<th>Email</th>
	<th>Password</th>
	<th>Gender</th>
  <th>Image</th>
  
  <br> <br><br><br><br><br><br>
</tr>

</thead>

</html>
<?php
 
while($row = mysqli_fetch_array($result)) 
{

?>
<tr>
  
	<td><?= $row['ID']; ?></td>
	<td><?= $row['Name']; ?></td>
	<td><?=  $row['Address']; ?></td>
	<td><?= $row['Mobile']; ?></td>
    <td><?= $row['National_ID']; ?></td>
	<td><?= $row['Email']; ?></td>
	<td><?=  $row['password']; ?></td>
	<td><?= $row['Gender']; ?></td>
  <td><img src='<?=$row['image'];?>' height="50" width="50" > </img ></td>
  
	 
</tr>
<?php
 
}
?>
