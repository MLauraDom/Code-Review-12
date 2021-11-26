<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>CR12 | Add Place</title>
    <link rel="stylesheet" type='text/css' href="css/style.css" />
</head>

<body>
<body class="bg-light">
    <header>
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
                                    <a class="nav-link" href="displayAll.php">
                                        Get API
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
    <main class="bg-gradient-secondary">
        <fieldset>
            <legend class='h2'>Add Place</legend>
            <form action="actions/a_create.php" method="POST" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" value="<?php echo $data['picture'] ?>" /></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><input class='form-control' type="text" name="name" placeholder="Name" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="number" name="price" placeholder="Price" /></td>
                    </tr>
                    <tr>
                        <th>Short Description</th>
                        <td><input class='form-control' type="text" name="description" placeholder="Short Description" /></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="number" name="longitude" placeholder="Longitude" /></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="number" name="latitude" placeholder="Latitude" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Place</button></td>
                        <td><a href="index.php"><button class='btn btn-primary' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </main>
    <footer class="p-5">
        <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
    </footer>
</body>

</html>