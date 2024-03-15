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
                        <a href="shop.php" style="color: mediumblue;">  <i style="margin-right: 1%;" class="fa-solid fa-cart-shopping justify-content-end fa-xl" ></i></a>
                        <div class="text-end">
                            <a href="login.php"><button class="bn14">Log In</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

<main>
    <div class="container-fluid pb-4">
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicator/dots  -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5"></button>
    </div>

    <!--The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/dogs1.1.jpg" alt="dog1" class="d-block" style="width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="img/cats1.1.jpg" alt="cat1" class="d-block" style="width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="img/dogs1.2.jpg" alt="dog2" class="d-block" style="width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="img/cats1.2.jpg" alt="cat2" class="d-block" style="width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="img/dogs1.3.jpg" alt="dog3" class="d-block" style="width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="img/cats1.3.jpg" alt="cat3" class="d-block" style="width: 100%;">
          </div>   
      </div>

    <!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
  </div>
</div>


        <section class="jumbotron text-center">
            <div class="container">
                <h1></h1>
                <p></p>
                <a href="about_us.php" class="btn btn-primary">Know more</a>
            </div>
        </section>

<section class="container-fluid" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-trivia h-100">
                <div class="card-body">
                    <h2 class="card-title">Trivia</h2>
                    <ul class="card-text">
                        <li>Dogs have a remarkable sense of smell, with some breeds able to detect scents up to 100,000 times better than humans.</li>
                        <li>The world's oldest known breed of domesticated dog is the Saluki, which dates back to ancient Egypt and is known for its speed and endurance.</li>
                        <li>The Chihuahua is the smallest dog breed and is named after the Mexican state of Chihuahua.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-care h-100">
                <div class="card-body">
                    <h2 class="card-title">Suggested Ways to Care for Pets</h2>
                    <ul class="card-text">
                        <li>Provide a balanced diet tailored to your pet's nutritional needs, ensuring they have access to fresh water at all times.</li>
                        <li>Regular exercise and playtime are essential for keeping your pet physically and mentally healthy.</li>
                        <li>Regular veterinary check-ups and vaccinations are crucial for preventing illness and maintaining your pet's health.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Products -->  
        <div class="container">     
            <div class="row">
                <div class="col-md-6 my-3">
                    <h2>Dry Dog Food</h2>
                    <p>Check out our selection of high-quality dry dog foods!</p>
                    <div class="card-product mx-3">
                        <img src="img/Vitality Valuemeal Puppy 1Kg.png" class="card-img-top" alt="dry_dogfood">
                        <div class="card-body">
                            <h5 class="card-title">Vitality- Value Meal Puppy</h5>
                            <p class="card-text">Bestsellers for Dry Dog Food</p>
                            <a href="shop.php" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <h2>Wet Dog Food</h2>
                    <p>Check out our selection of high-quality wet dog foods!</p>
                    <div class="card-product mx-3">
                        <img src="img/PEDIGREE® Country Stew 430g.png" class="card-img-top" alt="wet_dogfood">
                        <div class="card-body">
                            <h5 class="card-title">Pedigree- Country Stew</h5>
                            <p class="card-text">Bestsellers of Wet Dog Food</p>
                            <a href="shop.php" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

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
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1'
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="110063563909634"></div>
        <script type="text/javascript">
            (function() {
                var sa = document.createElement('script');
                sa.type = 'text/javascript';
                sa.async = true;
                sa.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.ywxi.net/js/1.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(sa, s);
            }
            )();
    </script>

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

</body>
</html>