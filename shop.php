<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws and Whiskers- Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="shop.css">

</head>

<body class="bg-body-tertiary">
    <header class="h-auto">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
                <a class="navbar-brand text-light" href="./"><i class="fas fa-paw"></i> Paws and Whiskers <i class="fas fa-cat"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="shop.php">Shop</a>
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

<!-- Item Categories-->
<section id="category">
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-2 g-4">
      <div class=" col">
        <div class="card">
          <img src="img/Vitality Valuemeal Adult 1Kg.png" class="card-img-top" alt="drydog_food">
        </div>
      </div>

      <div class=" col">
        <div class="card">
          <img src="img/PEDIGREE® Country Stew 430g.png" class="card-img-top" alt="wetdog_food">
        </div>
      </div>
  </div>
</section>


<!--Product Cards-->
<section id="product-cards">
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-4 g-4">
      <div class=" col filter-item all new ">
        <div class="card h-100">
          <img src="img/Aozi Organic Adult Dog Food 20kg.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Aozi Organic Adult Dog Food 20kg</h5>
            <p class="card-text shop-item-price"> Php 3240.00</p>
            <button type="button" style="width: 100%;" class="btn btn-success mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="img/Vitality Valuemeal Adult 20Kg.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title shop-item-title">Vitality Valuemeal Adult 20Kg</h5>
            <p class="card-text shop-item-price"> Php 2700.00</p>
            <button type="button" style="width: 100%;" class="btn btn-success mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="img/Vitality Valuemeal Puppy 20Kg.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Vitality Valuemeal Puppy 20Kg </h5>
            <p class="card-text shop-item-price"> Php 3300.00</p>
            <button type="button" style="width: 100%;" class="btn btn-success mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="img/Vitality Valuemeal Adult 1Kg.png" class="card-img-top shop-item-image " alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Vitality Valuemeal Adult 1Kg
              </h5>
            <p class="card-text shop-item-price"> Php 175.00</p>
            <button type="button" style="width: 100%;" class="btn btn-success mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear ">
        <div class="card h-100">
          <img src="img/PEDIGREE® Steak Canned dogfood 430g.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">PEDIGREE® Steak Canned dogfood 430g</h5>
            <p class="card-text shop-item-price"> Php 150.00</p>
            <button type="button" style="width: 100%;" class="btn btn-success mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="img/PEDIGREE® Country Chicken 430g.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">PEDIGREE® Country Chicken 430g</h5>
            <p class="card-text shop-item-price">Php 150.00</p>
            <button type="button" style="width: 100%;" class="btn btn-success mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>
      
      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="img/PEDIGREE® Country Stew 430g.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">PEDIGREE® Country Stew 430g</h5>
            <p class="card-text shop-item-price">Php 150.00</p>
            <button type="button" style="width: 100%;" class="btn btn-success mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="img/Aozi Lamb Canned Dogfood 430g.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Aozi Lamb Canned Dogfood 430g</h5>
            <p class="card-text shop-item-price">Php 100.00</p>
            <button type="button" style="width: 100%;" class="btn btn-success mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      </div>
  </div>
</section>

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

<!--Footer-->
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
                    <a href="https://mail.google.com/" class="links text-light"> <i class="fas fa-envelope"></i></a>
                    <a href="https://maps.google.com/" class="links text-light"> <i class="fas fa-map-marker-alt"></i></a>
            </div>
                <div class="col-md-4">
                <h3>Quick Links</h3>
                    <a href="about_us.php" class="links text-light">About us</a>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="credit">Made with ♥ by Paws and Whiskers | All Rights Reserved 2024</div>
            </div>
        </div>
    </div>
</footer>

    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">Top</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollToTopBtn").style.display = "block";
  } else {
    document.getElementById("scrollToTopBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

<script src="script.js"></script>

</body>
</html>