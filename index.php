<?php include('header.php')?>

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
                <h1>Pawsome goods for your Furr Babies</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
                <a href="#" class="btn btn-primary">Know more</a>
            </div>
        </section>

        <!----Login Form---->
        <section class="card-container" id="login"><?php include('login.php'); ?></section>


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
                        <img src="img/IMG-65d13d2b2d7808.69516260.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Vitality- Value Meal Puppy</h5>
                            <p class="card-text">Bestsellers for Dry Dog Food</p>
                            <a href="dry_dog_food.php" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <h2>Wet Dog Food</h2>
                    <p>Check out our selection of high-quality wet dog foods!</p>
                    <div class="card-product mx-3">
                        <img src="img/IMG-65d21fd31cd234.71612192.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pedigree- Country Stew</h5>
                            <p class="card-text">Bestsellers of Wet Dog Food</p>
                            <a href="wet_dog_food.php" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php include('footer.php')?>
