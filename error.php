<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Error</title>
        <?php require_once 'components/boot.php'?>    
    </head>
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
        <div class="container">  
            <div class="mt-3 mb-3">
                <h1>Invalid Request</h1>
            </div>
            <div class="alert alert-warning" role="alert">
                <p>You've made an invalid request. Please <a href="index.php" class="alert-link">go back</a> to index and try again.</p>
            </div>
        </div>
    </body>
</html>