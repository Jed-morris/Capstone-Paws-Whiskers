<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws and Whiskers- Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="styles.css">

</head>

<body class="bg-body-tertiary">
    <header class="h-auto">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
                <a class="navbar-brand text-light" href="index.php"><i class="fas fa-paw"></i> Paws and Whiskers <i class="fas fa-cat"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="cart.php">Cart</a>
                        </li>
                    </ul>
                    <div class="nav-icons text-light">
                        <a href="#shopping-cart" style="color: mediumblue;">  <i style="margin-right: 1%;" class="fa-solid fa-cart-shopping justify-content-end fa-xl" ></i></a>
                        <div class="text-end">
                            <a href="login.php"><button class="bn14">Log In</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


<!--Shopping Cart-->
<section class="container content-section" id="shopping-cart">
  
  <h3 style="text-decoration: underline;text-align: center; margin-bottom: 7%;">Shopping Cart</h3>
 
 <table class="table table-hover table-cart">
  <thead>
    <tr>
      <th>Item</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody class="cart-items">
    
     
  </tbody>
</table>

    <div class="cart-total"> 
      <strong class="cart-total-title">Total</strong>
      <span  class="cart-total-price" style="text-align: right;">$0</span>
    </div>
 

    <div class="btn-purchase" style="margin-top: 10%;">
      <button type="button"  class="btn btn-success btn-purchase "><i class="fa-solid fa-cart-shopping " style="margin-right: 6%;"></i>PURCHASE</button>
    </div>

</section>


    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Paws and Whiskers</h3>
                <p>Supplies for your furr babies</p>
                
                <div class="share">
                    <a href="https://www.facebook.com/pawsandwhiskers12" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter"></a>
                </div>
            </div>
                
            <div class="col-md-4">
                <h3>Contact Info</h3>
                    <a href="https://mail.google.com/" class="links"> <i class="fas fa-envelope"></i></a>
                    <a href="https://maps.google.com/" class="links"> <i class="fas fa-map-marker-alt"></i></a>
            </div>
                <div class="col-md-4">
                <h3>Quick Links</h3>
                    <a href="about_us.php" class="links">About us</a>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="credit">Made with ♥ by Paws and Whiskers | All Rights Reserved 2024</div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="cart.js"></script>

</body>
</html>