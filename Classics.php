<!-- 
    et3amal:
    1) el css beta3 el page kolaha
    2) rabt be el database w el 2eraya menha
    3) el function el asasya el hab2a mashy 3aleha fe el menu kolo
    4) ezay 2a2ra sora mn el database
    5) 3aiz el bar yb2a fo2 soret el background 
    6) ta2semet database el menu ( beef - chicken - betengan) fe mysql nafso
    7) position el boxes 
    8) kam star for each taba2
    lesa hayt3emel: 
    2) make your own sandwitch
    3) Search
-->  

<?php

include "TopMenu.php";
include "db.php";
include "pre.php";
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="full-page">
<link rel="stylesheet" type="text/css" href="menustyle.css">

                  <a href="Beef.php" class="MenuVar beef"> Beef </a>                 
                  <a href="chicken.php" class="MenuVar Chicken">   Chicken    </a>           
                  <a href="Burgers.php" class="MenuVar Burgers">   Burgers   </a>                          
                  <a href="Salads.php" class="MenuVar Salads">   Salads   </a>                 
                  <a href="Dessert.php" class="MenuVar Dessert">   Dessert   </a>                     
                  <a href="Classics.php" class="MenuVar Classics">   Classics </a>                  
                  <a href="Classics.php" class="MenuVar Mindsandwitch">   Mind Sandwitch </a>
                  
                  <form class="example" action=" "> <!-- php el search --> 
                  <input type="text" placeholder="Search your plate..." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                  </form>

                <!-- MEAT --> 
                <h10><b>Classics 🍹</b></h10>   
                <div class="cart_div">
<a href="cart.php" style="position:absolute; top:770px; left:300px; color:white; background-color:grey;"><img src="cart-icon.PNG"> Cart<span><?php echo $cart_count; ?></span></a>
</div>                 
                <!-- MEAT --> 
<?php
  $result = mysqli_query($conn,"SELECT * FROM `menu`");
while($row = mysqli_fetch_assoc($result)) 
{
 if ($row['parent_menu']=='classics'){

?>
 
    <form method="post" action="">  
        <div class="row"> 
           <div class="column">
                <div class="box ">                               
                <div class="imgBx">         
                <img src='<?=$row['image'];?>'> </img >    
<?php
for($i=0;$i< $row['Rating'];$i++)
{
?>
                    <span class="fa fa-star checked"></span>   
  <?php
}
  ?>
  <?php
for($i=0;$i< 5-$row['Rating'];$i++)
{
?>
                   <span class="fa fa-star"></span>  
  <?php
}
  ?>                 
                     <div class="content">                               
                     <h2> <?= $row['name']; ?></h2>
                     <h3> <?= $row['Price']; ?> </h3>
                     <p> <?=  $row['description']; ?> </p>                                                    
                     <div class="s">   <!-- beta3 goz2 el select -->                                 
                     <form action="menue.php">      <!-- add to cart (tb3 hussein)-->                                       
                     </div>
                     <br><br>  
                     <input type='hidden' name='ID' value=<?= $row['ID']; ?> />               
                     <button type='submit' class='button'> Add to cart </button>               
                     <br> <br> <br> <br><br> <br><br> <br><br> <br>
                     </div>     
                     </form>                          
                     </div>  
                     </div> 
</div>  <!-- beta3 goz2 el wrapper -->  
 </div>
                     </form> 

<?php
}
}
?>
</body>
</html>
</div>
</html>