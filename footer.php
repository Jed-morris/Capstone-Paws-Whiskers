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

    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">Top</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./js/homepage.js"></script>

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
    // Kunin ang lahat ng mga link sa navbar
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Iterasyon sa bawat link
    navLinks.forEach(function(navLink) {
        // I-check kung ang URL ng link ay katulad ng kasalukuyang URL
        if (navLink.href === window.location.href) {
            // Kung oo, idagdag ang class "active"
            navLink.parentNode.classList.add('active');
        }
    });
</script>

<script>
    function openItems(sectionId) {
    var i, cardContainer, navLinks;
    cardContainer = document.getElementsByClassName("card-container");
    for (i = 0; i < cardContainer.length; i++) {
        cardContainer[i].style.display = "none";
    }
    document.getElementById(sectionId).style.display = "grid";
    scrollToSection(sectionId);
}

function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

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