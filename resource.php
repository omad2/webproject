<?php

session_start();

include './includes/dbh.inc.php';

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

            <a href="index.php" class="header__logo">Kasaki Unit</a>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="index.php" class="nav__link nav__logo">
                    <span class="nav__logo-name">Kasaki</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Our Unit</h3>

                        <a href="index.php#home" class="nav__link">
                            <i class='bx bx-home nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>

                        <a href="index.php#about" class="nav__link">
                            <i class='bx bx-info-circle nav__icon'></i>
                            <span class="nav__name">About</span>
                        </a>

                        <a href="shop.php" class="nav__link">
                            <i class='bx bx-calendar-event nav__icon'></i>
                            <span class="nav__name">Shop</span>
                        </a>


                        <a href="index.php#apply" class="nav__link">
                            <i class='bx bx-send nav__icon'></i>
                            <span class="nav__name">Apply</span>
                        </a>

                        <a href="resource.php" class="nav__link">
                            <i class='bx bx-cloud-download nav__icon'></i>
                            <span class="nav__name">Resource</span>
                        </a>

                        <a href="login.php" class="nav__link">
                            <i class='bx bx-log-in nav__icon'></i>
                            <span class="nav__name">Login</span>
                        </a>
                    </div>
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo '
                        <div class="nav__items">
                        <h3 class="nav__subtitle">ADMIN</h3>

                        <a href="panel.php" class="nav__link">
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
        <section class="ressection resource" id="resource">
            <div class="rescontainer resource-container">
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" id="myInput" onkeyup='tableSearch()'>
                        </div>
                    </form>
                </nav>
                <div class="reswrapper">
                    <div class="table_secton">
                        <table class="table" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Software</th>
                                    <th>Platform</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $sql = "SELECT * from crud";
                                $result = mysqli_query($conn, $sql);

                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $software = $row['software'];
                                        $platform = $row['platform'];
                                        $name = $row['name'];
                                        $status = $row['status'];
                                        $download = $row['download'];
                                        echo '
                                    <tr>
                                        <td data-heading="ID">' . $id . '</td>
                                        <td data-heading="Software">' . $software . '</td>
                                        <td data-heading="Platform">' . $platform . '</td>
                                        <td data-heading="Name">' . $name . '</td>
                                        <td data-heading="Status"><span class="span-resource">' . $status . '</span></td>
                                        <td data-heading="Download">
                                            <a href="' . $download . '" target="_blank" class="download">
                                                <i class="bx bx-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    ';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <div id="bottom_anchor"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
                <img class="lg:w-1/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="assets/img/Dance.gif">
                <div class="text-center lg:w-2/3 w-full">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Didn't find what you are looking for?</h1>
                    <p class="mb-8 leading-relaxed">Join our discord server below and leave a suggestion in our channel. The staff team will review your comment and will update the resource section accordingly. We are continusly working on adding more to the resource section.</p>
                    <div class="flex justify-center">
                        <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" onclick="location.href='https://discord.gg/H9b2H3e8s3'">Discord</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script type="application/javascript">
        function tableSearch() {
            let input, filter, table, tr, td, txtValue;

            //Intialising Variables
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <script src="assets/js/main.js"></script>
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <span class="ml-3 text-xl">Kasaki</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Kasaki, All rights reserved
            </p>
        </div>
    </footer>
</body>

</html>