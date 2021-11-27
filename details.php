<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM places WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $name = $data['name'];
        $price = $data['price'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR12 - Place's Details</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" type='text/css' href="css/style.css" />
</head>
<body class="bg-light">
    <header style="background-image:url('pictures/places/<?php echo $picture ?>');background-repeat:no-repeat;background-position: center;background-size:cover;height:70vh;display:flex;justify-content: space-between;flex-direction: column;">
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
            <p class="h1 text-white text-center title"><?php echo $name ?></p>
        </div>
    </header>
    <main>
    <div class='m-5' style="height:50vh;">
        <div class='row g-0'>
            <div class='col-md-6' id="map" style="height:50vh;">
                <script>
                    var map;
                    let loc = {
                        lat: <?php echo $latitude ?>,
                        lng: <?php echo $longitude ?>
                    }

                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: loc,
                            zoom: 8
                        });
                        var pinpoint = new google.maps.Marker({
                            position: loc,
                            map: map
                        });
                    }
                </script>
            </div>
            <div class='col-md-6'>
                <div class='card-header'>
                    <h5 class='card-title'><?php echo $name ?></h5>
                </div>
                <div class='card-body'>

                    <p class='card-text'><?php echo $description ?></p>
                </div>
                <div class='card-footer'>
                    <p class='card-text text-success h3'><b>€ <?php echo $price ?></b></p>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer class=" p-5">
        <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
</body>

</html>