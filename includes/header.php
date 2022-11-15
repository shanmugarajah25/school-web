<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mu/Thannirootu muslim maha vidyalayam</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="assets/css/style.css">


</head>
<?php
require_once ('config.php');
?>

<body>

    <div class="container-fluid ">
        <div class="row header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-brown">
                <div class="container">
                    <a class="navbar-brand fw-bold" href="<?php echo $baseurl ?>">
                        <span>
                            Mu/TMMV
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo $baseurl ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $baseurl ?>about-us.php">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $baseurl ?>contact-us.php">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container py-2 bg-white" id="shw">