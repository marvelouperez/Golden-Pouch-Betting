<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <title>Golden Pouch</title>
    <link rel="icon" href="/public/assets/img/gold_coin_logo_3.jpg" type="image/x-icon">
    <link href="/public/assets/css/header.css" rel="stylesheet" />
    <link href="heroes.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <script src="/public/assets/js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>

    <body class="bg-body">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="/public/assets/img/gold_coin_logo_3.jpg" alt="" width="30"
                        height="30"> Golden Pouch</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Play
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/games/dota2">DOTA 2</a></li>
                                <li><a class="dropdown-item" href="/games/league_of_legends">League of
                                        Legends</a></li>
                                <li><a class="dropdown-item" href="/games/csgo">CS: GO</a></li>
                                <li><a class="dropdown-item" href="/games/valorant">Valorant</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/misc/watch">Watch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/misc/tournaments">Tournaments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://esportsinsider.com/">News</a>
                        </li>
                    </ul>
                    <li class="d-flex nav-item dropdown">
                        <?php if (!empty($_SESSION['username'])) : ?>
                        <a class="dropdown-toggle btn btn-outline-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/public/account/user_dashboard"></i>
                                    Dashboard</a></a></li>

                            <li><a class="dropdown-item" href="/authentication/logout">Logout</a>
                            </li>
                        </ul>
                        <?php else : ?>
                        <a class="btn btn-outline-light" href="/authentication/login" style="margin-left: 5px">Login</a>
                        <a class="btn btn-outline-light" href="/authentication/register"
                            style="margin-left: 5px">Join</a>
                        <?php endif; ?>
                    </li>
                </div>
            </div>
            </div>
        </nav>
    </body>
</body>