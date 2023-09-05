<?php
session_start();

$apiKey = 'b9BXvsezAKC1IThDzbBnzonP31Aa7QqsbYzh5lo1lIWfIolK3c20c3cg820Fs34Q';

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://dev.sellix.io/v1/categories',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $apiKey,
    ),
));

$response = curl_exec($curl);

curl_close($curl);
$categories = json_decode($response)->data->categories;

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.sellix.io/static/css/embed.css" rel="stylesheet" />
    <title>Kasaki</title>
</head>

<body class="scroll-smooth hover:scroll-auto">
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <img src="assets/img/flower.png" alt="" class="header__img">

            <a href="index" class="header__logo">Kasaki Unit</a>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="index#home" class="nav__link nav__logo">
                    <span class="nav__logo-name">Kasaki</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Our Unit</h3>

                        <a href="index#home" class="nav__link">
                            <i class='bx bx-home nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>

                        <a href="index#about" class="nav__link">
                            <i class='bx bx-info-circle nav__icon'></i>
                            <span class="nav__name">About</span>
                        </a>

                        <a href="shop" class="nav__link">
                            <i class='bx bx-calendar-event nav__icon'></i>
                            <span class="nav__name">Shop</span>
                        </a>


                        <a href="index#apply" class="nav__link">
                            <i class='bx bx-send nav__icon'></i>
                            <span class="nav__name">Apply</span>
                        </a>

                        <a href="resource" class="nav__link">
                            <i class='bx bx-cloud-download nav__icon'></i>
                            <span class="nav__name">Resource</span>
                        </a>

                        <a href="login" class="nav__link">
                            <i class='bx bx-log-in nav__icon'></i>
                            <span class="nav__name">Login</span>
                        </a>
                    </div>
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo '
                        <div class="nav__items">
                            <h3 class="nav__subtitle">ADMIN</h3>
                    
                            <a href="panel" class="nav__link">
                                <i class="bx bx-compass nav__icon"></i>
                                <span class="nav__name">Panel Page</span>
                             </a>
                                            
                            <a href="includes/logout.inc.php" class="nav__link nav__logout">
                                <i class="bx bx-log-out nav__icon mt-4"></i>
                                <span class="nav__name">Log Out</span>
                            </a>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>
    <main>
        <div class="products-container" id="buy">
            <div class="container">
                <h1 class="section-title">Kasaki Shop</h1>

                <div class="product-list-categories">

                    <div class="product-categories">

                        <?php
                        foreach ($categories as $key => $category) {
                            if ($key == 0) {
                                echo '<button data-id=' . $category->id . ' onclick="showCategory(event)" class="clicked">' . $category->title . '</button>';
                            } else {

                                echo '<button data-id=' . $category->id . ' onclick="showCategory(event)">' . $category->title . '</button>';
                            }
                        }
                        ?>

                    </div>

                    <?php
                    foreach ($categories as $category) {


                        echo '<div class="products" data-category="' . $category->id . '">';

                        foreach ($category->products_bound as $product) {
                            echo '
                <div class="product-item">
                    <img src="assets/images/product-img.svg" alt="" class="product-img" />

                    <p class="product-title">' . $product->title . '</p>
                    <div class="product-price">$' . $product->price . '</div>
                    <p class="product-desc">
                     ' . $product->description . '
                    </p>

                    <button     
                      data-sellix-product="' . $product->uniqid . '"
                      type="submit"
                      alt="Buy Now with sellix.io">
                      Buy
                    </button>
                </div>';
                        }

                        echo " </div>";
                    }
                    ?>



                </div>
            </div>
        </div>
    </main>
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <span class="ml-3 text-xl">Kasaki</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Kasaki, All rights reserved
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.sellix.io/static/js/embed.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>