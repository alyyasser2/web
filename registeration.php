<html>
 <?php include "homeheader.php"?>
 <title>Sign up</title>
<head>
    <img src="pexels-pixabay-260922.jpg" alt="restaurnt"  width="1700" height="800" > 
    <style>
        /* btsghar el box */
      *,
*:after{
     /* margin bara padding gowa */
    padding: 0;  
    margin: 0;
    box-sizing: border-box;
}

form{
    height: 600px;
    width: 400px;
    position: fixed;
    background-color: rgba(255,255,255,0.13);
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    overflow:scroll;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
    </style>

</head>
<body>
    <style>.error{
        color:red;
    }</style>


    <form method="post" action="projectlogin.php" >
        <h3>Sign Up</h3>


        <label for="Name">Name</label>
        <input type="text" placeholder="Name" id="Name" name="Name" required="">
        <span class="error">* </span>

        <label for="Address">Address</label>
        <input type="text" placeholder="Address" id="Address" name="Address">

        <label for="Mobile">Mobile</label>
        <input type="text" placeholder="Mobile" id="Mobile" name="Mobile">

        <label for="National">National ID</label>
        <input type="text" placeholder="National ID" id="National_ID" name="National_ID">

        <label for="Email">Email</label>
        <input type="text" placeholder="Email" id="Email" name="Email" required="">
        <span class="error">* </span>
        
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required="">
        <span class="error">*</span>

        <label for="Confrim">Confrim Password</label>
        <input type="password" placeholder="Confrim Password" id="Confrim_Password" name="Confirm_Password" required="">
        <span class="error">* </span>

        <label for="Gender">Gender</label>
        <select name="Gender" id="gender"  style="background-color:black">
        <span class="error">*</span>

<option selected hidden value="" >Please Select</option>
<option  value="0" >Other   </option>
<option  value="1">Male  </option>
<option  value="2">Female  </option>
</select>

<label for="Select image" >Image</label>
<input type="file" name="image" >

        <button>Submit</button> 
    </form>
</body>

<script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("Confrim_Password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    Confrim_Password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
Confrim_Password.onkeyup = validatePassword;
</script>
</html>
