<?php

session_start();

include './includes/dbh.inc.php';
if (isset($_SESSION['userid'])) {
} else {
    header("location: ./index");
    exit();
}

if (isset($_POST['submit'])) {
    $software = $_POST['software'];
    $platform = $_POST['platform'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $download = $_POST['download'];

    $sql = "INSERT INTO crud (software, platform, name, status, download) VALUES('$software', '$platform', '$name','$status','$download');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: panel");
        exit();
    } else {
        die(mysqli_error($conn));
    }
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

                        <a href="panel" class="nav__link">
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
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Hi Admins!</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">To put a new link in resource fill the form below. Please make sure you don't leave any empty inputs and place the links in the right section. Incase you made a mistake or want to update a download link, click on the ghhost
                        icon and it will bring you to a different page to edit. Just re-enter the Software, Platform etc and put the correct download link in and press update. The other button is for deleting.
                    </p>
                </div>
                <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                    <div class="relative flex-grow w-full">
                        <label class="leading-7 text-sm text-gray-600">Software</label>
                        <input type="text" id="text" name="software" placeholder="AE/SVP/CC etc" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" autocomlete="off" require>
                    </div>
                    <div class="relative flex-grow w-full">
                        <label class="leading-7 text-sm text-gray-600">Platform</label>
                        <input type="text" id="text" name="platform" placeholder="Win/MacOS/iPhone/Android" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" autocomlete="off" require>
                    </div>
                    <div class="relative flex-grow w-full">
                        <label class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="text" name="name" placeholder="Product Name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" autocomlete="off" require>
                    </div>
                    <div class="relative flex-grow w-full">
                        <label class="leading-7 text-sm text-gray-600">Status</label>
                        <input type="text" id="text" name="status" placeholder="Working/Updating/Down" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" autocomlete="off" require>
                    </div>
                    <div class="relative flex-grow w-full">
                        <label class="leading-7 text-sm text-gray-600">Download</label>
                        <input type="text" id="text" name="download" placeholder="Download link" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" autocomlete="off" require>
                    </div>
                    <button class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                </div>
            </div>
        </section>
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
                                        <td data-heading="Status"><span>' . $status . '</span></td>
                                        <td data-heading="Download">
                                            <a href="' . $download . '" target="_blank" class="download">
                                                <i class="bx bx-download"></i>
                                            </a>
                                            <a href="update.php?updateid=' . $id . '" target="_blank" class="download">
                                                <i class="bx bx-ghost"></i>
                                            </a>
                                            <a href="delete.php?deleteid=' . $id . '" target="_blank" class="download">
                                                <i class="bx bx-minus-circle"></i>
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