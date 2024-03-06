<body class="bg-body-tertiary">
<header class="h-auto">
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" href="index.php" onclick="openItems('main')"><i class="fas fa-paw"></i> Paws and Whiskers <i class="fas fa-cat"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dry_dog_food.php" onclick="openItems('dry_dogfood')">Dry Dog Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="wet_dog_food.php" onclick="openItems('wet_dogfood')">Wet Dog Food</a>
                    </li>
                </ul>
            <div class="nav-icons text-light">
                <div class="fas fa-search ms-3" id="search-btn"></div>
                    <div class="fas fa-shopping-cart ms-3" id="cart-btn"></div>
                        <span>0</span>
                    <div class="fas fa-user ms-3" id="login-btn" onclick="openItems('login')">Login</div>
                </div>
            </div>
        </div>
    </nav>
</header>