<?php

if(!$conn=mysqli_connect("localhost","root","","test1"))
{
die("failed to connect!");
}
   
if($_SERVER['REQUEST_METHOD']=="POST")
{
        $Name=$_POST['Name'];
        $Address=$_POST['Address'];
        $Mobile=$_POST['Mobile'];
        $National_ID=$_POST['National_ID'];
        $Email=$_POST['Email'];
        $password=$_POST['password'];
        
        if(isset($_POST['Gender']))
        $Gender=$_POST['Gender'];

        if(isset($_POST['image']))
        $image=$_POST['image'];
  
   $query="INSERT INTO registeration(Name ,Address,Mobile,National_ID,Email,password,Gender,image)
VALUES ('$Name', '$Address', '$Mobile', '$National_ID', '$Email','$password','$Gender','$image')";

mysqli_query($conn,$query);
echo"successufuly";
}

?>