<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>KilliFish Game</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">KilliFish</a>

            <div class="collapse navbar-collapse" id="website-navbar">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Updates</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Community</a>
                    </li>
                    <li class="nav-item active">
                        <a href="home/about" class="nav-link">About</a>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav d-flex flex-row ml-auto">
                <li class="nav-item ml-lg-3 mr-lg-0 mr-3">
                    <a href="#" class="text-decoration-none">
                        <i class="material-icons material-icons-outlined">account_circle</i>
                    </a>
                </li>
            </ul>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#website-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container my-4">
        <?= $this->renderSection('content'); ?>
    </div>

    <footer class="bg-dark text-light py-3">
        <div class="container">
            <div class="row">
                <div class="text-center text-lg-left col-12 col-lg-5 order-2 order-lg-1 my-3 my-lg-0">
                    &copy;2020 KilliFish Game
                </div>
                <div class="col-12 col-lg-2 order-1 order-lg-2 text-center">
                    <a href="#" class="text-light">
                        <i class="material-icons material-icons">expand_less</i>
                    </a>
                </div>
                <div class="col-12 col-lg-5 order-3">
                    <div class="text-center text-lg-right">
                        <a href="#" class="text-light ml-2">
                            <i class="material-icons">facebook</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>