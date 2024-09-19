<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORUM</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/public/img/logoBMW.png" alt="BMW Logo" width="190" height="110" class="d-inline-block align-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                        </li>
                    <?php
            if(isset($_SESSION['user'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/deconnexion"><i class="fa-solid fa-circle-plus"></i> Deconnexion</a>
                </li>
                <?php
                if($_SESSION['user']['role']== "Admin"){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/utilisateurs"><i class="fa-solid fa-circle-plus"></i> Utilisateurs</a>
                    </li>
                    <?php
                }
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/register"><i class="fa-solid fa-circle-plus"></i> Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/connexion"><i class="fa-solid fa-circle-plus"></i> Connexion</a>
                </li>
            <?php
            }
            ?>
                </div>
            </div>
        </nav>
    </header>