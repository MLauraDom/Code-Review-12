<?php
require 'actions/db_connect.php';
$sql = "SELECT * FROM places";
$result = mysqli_query($connect, $sql);
$pbody = '';
$tbody = '';
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "<div class='col p-3'>
        <div class='card p-0 shadow-lg bg-body rounded all-places'>
            <img class='card-img-top' src='pictures/places/" . $row['picture'] . "'alt='" . $row['name'] . "'>
            <h4 class='card-header text-center'>" . $row['name'] . "</h4>
            <div class='card-body p-2'>
                <p class='h5 card-text text-center text-success'>" . $row['price'] . " € </p>
            </div>
            <div class='card-footer text-center'>
               <a class='btn btn-small bg-info' href='details.php?id=" . $row['id'] . "'>Show Details</a>
            </div>
        </div>
    </div>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR12 - Laura Moldovan</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" type='text/css' href="css/style.css" />
</head>

<body class="bg-light">
    <header class="header1">
        <div class="menu">
            <ul class="nav">
                <nav class="navbar navbar-expand navbar-dark">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        HOME
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Customize
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="api/displayAll.php">
                                        displayAll
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ajaxOffers.html">
                                        Ajax Offers
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </ul>
        </div>
        <div class="m-auto p-5">
            <p class="h1 text-white text-center title">Mount Everest</p>
        </div>
    </header>
    <main class="container p-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <?= $tbody; ?>
        </div>
        </div>
    </main>
    <footer class="p-5">
        <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
    </footer>
</body>


</html>