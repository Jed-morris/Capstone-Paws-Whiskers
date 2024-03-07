<?php include('header.php');?>
<div class="item-list position-absolute">
    <section class="card-container" id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <main>
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
                    </main>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h1><span>Paw</span>some goods for your <span>Furr Babies</span></h1>
                        <p>Pamper your fur babies with our pawsome selection of pet supplies available online at Paws and Whiskers. From tasty treats to stylish accessories, we've got everything you need to keep your pets happy and healthy. Shop now for the best deals and make tails wag</p>
                        <a href="#" class="btn btn-primary">Know more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
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
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <section class="card-container" id="products"><div class="container"></div></section>
        </div>
        <div class="row">
            <section class="card-container" id="login"><?php include('login.php'); ?></section>
        </div>
    </div>
</div>
<div class="slider" id="slider">
    <div class="shopping-cart">
    </div>
    <div class="btn-box">
        <button class="btn btn-success">Place Order</button>
    </div>
</div>
<?php include('footer.php')?>