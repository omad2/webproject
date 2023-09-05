<?php
session_start();

if (isset($_SESSION["useruid"])) {
    header("location: ./index");
    exit();
}
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
    <title>Kasaki</title>
</head>

<body class="scroll-smooth hover:scroll-auto">
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <img src="assets/img/flower.png" alt="" class="header__img">

            <a href="#" class="header__logo">Kasaki Unit</a>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#home" class="nav__link nav__logo">
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

                        <a href="#" class="nav__link">
                            <i class="bx bx-compass nav__icon"></i>
                            <span class="nav__name">Panel Page</span>
                        </a>
                        
                        <a href="includes/logout.inc.php" class="nav__link nav__logout">
                            <i class="bx bx-log-out nav__icon"></i>
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
        <div class="animate-pulse min-h-screen bg-white-200 py-6 flex flex-col justify-center relative overflow-hidden sm:py-12">
            <span class="border text-4xl text-yellow-800 px-6 pt-10 pb-8 bg-white w-1/2 max-w-md mx-auto rounded-t-md sm:px-10">Sign in Form</span>
            <div class="border relative px-4 pt-7 pb-8 bg-white shadow-xl w-1/2 max-w-md mx-auto sm:px-10 rounded-b-md">
                <form action="includes/login.inc.php" method="post">
                    <label class="block">Username or Email</label>
                    <input type="text" name="uid" class="border w-full h-10 px-3 mb-5 rounded-md" placeholder="Username or Email">
                    <label  class="block">Password</label>
                    <input type="password" name="pwd" class="border w-full h-10 px-3 mb-5 rounded-md" placeholder="password">
                    <button type="submit" name="submit" class="mt-5 bg-red-500 hover:bg-red-700 shadow-xl text-white uppercase text-sm font-semibold px-14 py-3 rounded">Login</button>
                </form>
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

    <script src="assets/js/main.js"></script>
</body>

</html>