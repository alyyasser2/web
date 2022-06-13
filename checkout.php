<html>
    <style>
       

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body {
    display: fixed;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: rgb(22, 22, 22);

    padding: 30px 10px;
}

.card {
    max-width: 500px;
    margin: auto;
    color: rgba(240, 156, 0, 0.947);
    border-radius:  8px;
}

p {
    margin: 0px;
}

.container .h8 {
    font-size: 30px;
    font-weight: 800;
    text-align: center;
}

.btn.btn-primary {
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
    background: orange;
    border: none;
    transition: 0.5s;
    background-size: 200% auto;
    border-radius: 8px;
}


.btn.btn.btn-primary:hover {
    background-position: right center;
    color: black;
    text-decoration: none;
    
}
.button {

text-align: center;
text-decoration: none;
display: inline-block;
font-size: 22px;   
margin: 4px 2px;
cursor: pointer;
width: 250px;
height: 50px;
background-color: rgba(240, 156, 0, 0.947); 
border: 0px solid;
border-radius: 8px;
position: absolute;
left: 600px;
top:380;
}
.btn.btn-primary:hover .fas.fa-arrow-right {
    transform: translate(15px);
    transition: transform 0.2s ease-in;
    border-radius: 8px;
}

.form-control {
    color: white;
    background-color: black;
    border: 2px solid transparent;
    height: 60px;
    padding-left: 20px;
    vertical-align: middle;
}

.form-control:focus {
    color: white;
    background-color: black;
    border: 2px solid #2d4dda;
    box-shadow: none;
}

.text {
    font-size: 14px;
    font-weight: 600;
}

::placeholder {
    font-size: 14px;
    font-weight: 600;
}
.p{
  font-size:25px;
  margin-right:240px;
  
}

.radiobtn{
  margin-right:25px;
}
    </style>
    <form method="post" action="editorder.php" >
<div class="container p-0">
        <div class="card px-4">
            <p class="h8 py-3">Payment Details</p>
            


            <div class="row gx-3">
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Person Name</p>
                        <input class="form-control mb-3" type="text" placeholder="Name" required="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Card Number</p>
                        <input class="form-control mb-3" type="text" placeholder="1234 5678 435678" required="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Expiry</p>
                        <input class="form-control mb-3" type="text" placeholder="MM/YYYY" required=""><br>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">CVV/CVC</p>
                        <input class="form-control mb-3 pt-2 " type="password" placeholder="***" required="">
                    </div>
                </div>
                <button type='submit' class='button'  required=""> Confrim </button>
            </div>
        </div>
    </div>
    </form>
</html>