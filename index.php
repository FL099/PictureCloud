<?php

?>

<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="res/css/gen.css">
    <link rel="stylesheet" href="res/css/mystyle.css">


    <script src="res/js/app.js"></script>

    <title>PictureCloud</title>
    <link rel="icon" href="res/img/Cloud.ico" type="image/x-icon">
    <!--TODO: falls es kein .ico gibt mit .png versuchen--- <link rel="shortcut icon" type="image/png" href="res/img/Cloud.png"/>-->
</head>
<body>
<header>
    <div class="pos-f-t">

        <nav class="navbar navbar-dark bg-grey">
            <a class="navbar-brand" href="#">
                <img src="res/img/Cloud.png" width="30" height="30" class="d-inline-block align-top" alt="">
                PictureCloud
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" onclick="addchat(true)"></span>
            </button>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-grey p-4 screen">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
    </div>
</header>
<main id="main">
    <div id="chatB" class="btn btn-primary" onclick="addchat(false)">💬</div>
    <section id="chatF" class="d-none"><?php include "inc/chat.inc.php"?></section>
</main>
<footer class="bg-grey footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 offset-1">&#169;2020</div>
            <div class="col-3 offset-1">by Florian S.</div>
            <div class="col-3 offset-1"><a href="index.php?site=impressum">Impressum</a></div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
