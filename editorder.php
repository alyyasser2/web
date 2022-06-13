<!DOCTYPE html>

<html>
<?php
include "editorder.css";
?>
<body>

<h1>You Can edit the order in 5 minutes</h1>
 
<button id="mybtn" class="button" onclick="window.location.href='cart.php'"> Press here to edit your order </button>
<script>
const myTimeout = setTimeout(myGreeting, 10000);
function myGreeting() {
  document.getElementById("mybtn").innerHTML ='<h2 class="b">you can`t edit your order</h2>'
  location.href = "s.php";
}
</script>
</body>

</html>
