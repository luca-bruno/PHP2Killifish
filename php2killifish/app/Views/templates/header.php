<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css'); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <title>Killifish TBA</title>
    <!-- change title as game title is decided upon -->
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
    <a class="navbar-brand" href="home">Killifish TBA</a> <!-- change title as game title is decided upon -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- navigation bar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('/home'); ?>"> 
            <i class="material-icons ">home</i> Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('/about'); ?>">
            <i class="material-icons ">help</i> About</a>
        </li>   
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('/updates'); ?>">
            <i class="material-icons ">announcement</i> Updates</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('/community'); ?>">
            <i class="material-icons ">group</i> Community</a>
        </li>
        </ul>
    </div>

    <div>
        <ul class="navbar-nav d-flex flex-row ml-auto">

        <!-- <li class="nav-item active ml-lg-3 mr-lg-0 mr-3">
            <a class="nav-link" href="#" >
            <i class="material-icons md-light">account_circle</i></a>
        </li> -->

        <!-- avatar to be added later, placeholder for now ^^ -->

        <?php if (session()->get('isLoggedIn')): ?>
            <li class="nav-item active disabled">
            <!-- disabled retains look of nav-link, but removes btn functionality -->
            <a class="nav-link">Hello, <?= session()->get('userScreenName') ?></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="logout">Logout</a>
            </li>
        
        <?php else: ?>
            <li class="nav-item active">
                <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item active disabled">
                <!-- disabled retains look of nav-link, but removes btn functionality -->
                <a class="nav-link">/</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="register">Register</a>
            </li>
        </ul>
        </div>
        <?php endif; ?>
    </div>
    </nav>