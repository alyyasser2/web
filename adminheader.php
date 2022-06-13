<html>
<head>  
   
    <div class="fixed-header">
        <div class="container">
            <nav>
            <a href="menuedit.php" > Menu </a>    
            <a href="Addmenu.php"  > Add Menu   </a>               
            <a href="clientedit.php"  > Clients    </a>           
            <a href="Cacheredit.php"  > Cacher   </a>  

            </nav>
        </div>
    </div> 
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2022 Your Company</div>        
    </div>
</head>
<style>
     .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: black;
        padding: 10px 0;
        color: white;
        z-index: 100;
        
    }
    .fixed-header{
        top: 0;
        font-size: 22px; 
    }
    .fixed-footer{
        bottom: 0;

    }
    .container{
        width: 80%;
        margin: 0 auto; 
    }
    nav a{
        color: white;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
</style>
</html>