<?php

session_start();

include './includes/dbh.inc.php';

$id=$_GET['updateid'];

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

    $sql = "update crud set software='$software', platform='$platform',
    name='$name', status='$status', download='$download' WHERE id=$id;";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: panel");
        exit();
    } else {
        die(mysqli_error($conn));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/user.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Crud Operations</title>
</head>

<body>
    <div class="container my-5">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Software Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="AE/SVP/CC etc" name="software" autocomlete="off" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Platform</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Win/MacOS/iPhone/Android" name="platform" autocomlete="off" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product Name" name="name" autocomlete="off" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Status</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Working/Updating/Down" name="status" autocomlete="off" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Download</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Download link" name="download" autocomlete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>