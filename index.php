<?php
session_start();
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
                <a href="#home" class="nav__link nav__logo">
                    <span class="nav__logo-name">Kasaki</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Our Unit</h3>

                        <a href="#home" class="nav__link">
                            <i class='bx bx-home nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>

                        <a href="#about" class="nav__link">
                            <i class='bx bx-info-circle nav__icon'></i>
                            <span class="nav__name">About</span>
                        </a>

                        <a href="shop" class="nav__link">
                            <i class='bx bx-calendar-event nav__icon'></i>
                            <span class="nav__name">Shop</span>
                        </a>

                        <a href="#apply" class="nav__link">
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

    <!--========== CONTENTS ==========-->
    <main>
        <section class="text-gray-600 body-font" id="home">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Kasaki Unit
                        <br class="hidden lg:inline-block">Founded By Majira
                    </h1>
                    <p class="mb-8 leading-relaxed">Kasaki is an upcoming unit with brilliant creative individuals.
                        We specialize in editing AMV but are continously looking for talent in any field. Join our discord to make some friends and become part of the team.</p>
                    <div class="flex justify-center">
                        <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" onclick="location.href='https://discord.gg/H9b2H3e8s3'" target="_blank">Discord</button>
                        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg" onclick="location.href='resource'">Resource</button>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="assets/img/ae.gif">
                </div>
            </div>
        </section>
        <section class="text-gray-600 body-font" id="about">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-red-500"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">WHAT WE DO?</h1>
                        <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Kasaki is currently expanding itself to become a channel where artist can submit their music with our team to make an AMV. This will help the team grow aswell as help our members
                            to excel in the industry and make a clear path for their careers.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full" src="assets/img/amv.jpg">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Anime Music Video</h2>
                        <p class="text-base leading-relaxed mt-2">We take your music and apply any anime that fits with song over it. We select our available member who is ready to work to cut, add effects and transition to the anime. This will create a nice atmospheric video for viewers to watch.</p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full" src="assets/img/gfx.jpg">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Graphc Design</h2>
                        <p class="text-base leading-relaxed mt-2">We have a small team of graphic designers who are willing to do any work you provide them with. Banners, Posters, PFP, Logos & AVI can all be made. We do special request GFX for thread, signature and UI/UX design</p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full" src="assets/img/contest.jpg">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Contest & Events</h2>
                        <p class="text-base leading-relaxed mt-2">We host contest with prizes up $100 and sometimes Nitro GIFT. There will also be exclusive members only giveaways where they win big prizes up to $200.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Staff Team</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">When you join our discord server and if you have any question. Look for one of us below :)</p>
                </div>
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/img/majira.png">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Majyrafy#0001</h2>
                                <p class="text-gray-500">Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/img/owen.gif">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Owen#0004</h2>
                                <p class="text-gray-500">Co-Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/img/zuko.png">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">elegant#0001</h2>
                                <p class="text-gray-500">Lead</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/img/ayresia.png">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Ayresia#0001</h2>
                                <p class="text-gray-500">Dev</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/img/x.png">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">xrazrr#5467</h2>
                                <p class="text-gray-500">Judge</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/img/qurs.png">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">qurs#0001</h2>
                                <p class="text-gray-500">Judge</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/img/d.png">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">desyur1.avi#9634</h2>
                                <p class="text-gray-500">Judge</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/img/hash.png">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">hash#1906</h2>
                                <p class="text-gray-500">cunt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mx-auto" id="apply">
            <div class="flex justify-center px-6 my-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('assets/img/1piece.jpg')"></div>
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Apply</h3>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSd8i1BUQu_sYINNm9l3cCk9ZvWhWrZQq1xq-pWj147rv7J1SA/formResponse">
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">
                                    What is your discord tag?
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" name="entry.474536757" require />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">
                                    Where did you found us?
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" name="entry.159319280" />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">
                                    What do you edit on?
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" name="entry.1149948659" />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">
                                    How long have you been editing?
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" name="entry.1251781794" />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">
                                    Socials?
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" name="entry.1665141677" />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">
                                    Will you rep the logo?
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" name="entry.459016361" />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">
                                    How active will you be? 1-10
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" name="entry.2054935593" />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700">
                                    Link to your edit
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" name="entry.1438734480" />
                            </div>
                            <div class="mb-6">
                                <button value="Submit" type="submit" class="
                            mt-4
            h-10
            px-5
            text-indigo-100
            bg-red-700
            rounded-lg
            transition-colors
            duration-150
            focus:shadow-outline
            hover:bg-red-800
          ">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <span class="ml-3 text-xl">Kasaki</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Kasaki, All rights reserved
                </p>
            </div>
        </footer>
    </main>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>

</html>