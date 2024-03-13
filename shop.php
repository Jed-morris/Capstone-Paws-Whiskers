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
                        <div class="fas fa-search ms-3" id="search-btn"></div>
                        <div class="fas fa-shopping-cart ms-3" id="cart-btn"></div>
                        <span>0</span>
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

</body>
</html>