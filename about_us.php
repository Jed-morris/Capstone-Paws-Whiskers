<?php include('header.php')?>


<style>
/* Container styles */
.container {
    margin-top: 50px;
}

/* Section headings */
h2, h3 {
    color: #333;
    font-weight: bold;
}

/* Introduction paragraph */
p {
    color: #444;
    line-height: 1.6;
}

/* Team members list */
ul {
    list-style-type: none;
    padding-left: 0;
}

/* Team member names */
strong {
    color: #333;
}

/* Values list */
ul {
    margin-top: 10px;
}

/* Pet care tips list */
ul {
    margin-top: 10px;
}

/* Testimonials blockquote */
blockquote {
    font-style: italic;
    color: #777;
}

/* Testimonials cite */
cite {
    display: block;
    text-align: right;
    color: #555;
}

/* Contact information */
p {
    margin-bottom: 5px;
}

/* Responsive layout */
@media (max-width: 768px) {
    /* Adjustments for smaller screens */
    .container {
        margin-top: 30px;
    }

    h2, h3 {
        font-size: 24px;
    }

    p {
        font-size: 16px;
    }

    blockquote {
        font-size: 14px;
    }

    cite {
        font-size: 12px;
    }
}       
    </style>

    <main>
        <!----Login Form---->
        <section class="card-container" id="login">
            <?php include('login.php'); ?>
        </section>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>About Us</h2>
                        <p>Welcome to Paws and Whiskers, your one-stop shop for all your pet's needs. Founded in [year], we are dedicated to providing top-quality products and exceptional service to our customers and their furry friends.</p>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Meet Our Team</h3>
                    <p>Our team of pet enthusiasts is here to help you find the perfect products for your pets. Get to know the faces behind Paws and Whiskers!</p>
                    <ul>
                        <li><strong>Jed Moses</strong> - UX Designer</li>
                        <li><strong>Robert Starks</strong> - Back-end Developer</li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Our Values</h3>
                    <p>At Paws and Whiskers, we believe in...</p>
                    <ul>
                        <li>Providing the highest quality products for your pets</li>
                        <li>Exceptional customer service</li>
                        <li>Promoting animal welfare and adoption</li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Pet Care Tips</h3>
                    <p>Here are some tips to keep your pets happy and healthy:</p>
                    <ul>
                        <li>Regular exercise is essential for your pet's health.</li>
                        <li>Ensure your pet has a balanced diet and access to fresh water at all times.</li>
                        <li>Schedule regular check-ups with your veterinarian.</li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>What Our Customers Say</h3>
                    <blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis hendrerit diam, vel tincidunt velit."</blockquote>
                    <cite>- Neo Smith, Happy Pet Owner</cite>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Contact Us</h3>
                    <p>For inquiries, you can reach us at:</p>
                    <p>Address: 123 Larabel Street, Vercel City</p>
                    <p>Phone: 123-456-7890</p>
                    <p>Email: info@pawsandwhiskers.cloud</p>
                </div>
            </div>
        </article>
     
    </main>

<?php include('footer.php') ?>