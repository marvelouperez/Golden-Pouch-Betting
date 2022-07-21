<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>

<style>
    .carousel-inner>.item>img {
        width: 50%;
        height: 100px;
    }
</style>

    <div class="col-xxl-8 px-4 py-5 hero-section-1" style="width: 100%">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Welcome to the Golden Pouch</h1>
                <p class="text-white" style="font-size: x-large">Test your luck by betting on your favorite e-sports
                    teams!
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a type="button" href="/authentication/login.php" class="btn btn btn-outline-light btn-lg px-4 me-md-2">Login</a>
                    <a type="button" href="/authentication/register.php" class="btn btn btn-outline-light btn-lg px-4">Join</a>
                </div>
            </div>
        </div>
    </div>

<div class="EventsTitle" style="margin-top: 20px">
    <div class="card text-white bg-dark">
        <h1 style="font-size:x-large">Watch</h1>
    </div>
</div>

<!-- Carousel wrapper -->
<div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" style="margin-top: 20px">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <style>
        .carousel-inner>.item>video {
            width: 50%;
            height: 100px;
        }
    </style>
    <!-- Inner -->
    <div class="carousel-inner" style="width: 100%" >
        <!-- Single item -->
        <div class="carousel-item active">
            <video class="img-fluid" autoplay loop muted>
                <source src="/public/assets/videos/valorant_gameplay_!.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Tenz SEN</h5>
                <p>
                    Clutch Factor is HIGHHH!
                </p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="/public/assets/videos/dota2_rampage_1.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Team Secret vs Liquid</h5>
                <p>
                    Rampage!!
                </p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="/public/assets/videos/pentakil_lol_1.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Pentakill</h5>
                <p>
                </p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->

<div class="EventsTitle" style="margin-top: 20px">
    <div class="card text-white bg-dark">
        <h1 style="font-size:x-large">News</h1>
    </div>
</div>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 20px">
    <div class="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/public/assets/img/lol_bg_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>LEGENDS NEVER DIE</h5>
                    <p>League of Legends opening of 2017 World Championship</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/public/assets/img/dota2_bg_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Big Crowd, Big Stake</h5>
                    <p>Dota 2 The International</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/public/assets/img/dota2_winning_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>OG SNATCHS AEGIS AGAIN!</h5>
                    <p>Dota 2 The International 2019</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="EventsTitle" style="margin-top: 20px">
    <div class="card text-white bg-dark">
        <h1 style="font-size:x-large">Upcoming Events</h1>
    </div>
</div>

<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-4">
            <div class="card text-white bg-dark shadow-lg">
                <img src="/public/assets/img/vct masters copenhagen.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">VCT MASTERS COPENHAGEN</h5>
                    <p class="card-text">SENTINELS VS C9</p>
                    <a href="#" class="btn btn-outline-light">Play</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card text-white bg-dark shadow-lg">
                <img src="/public/assets/img/the_international_2022.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The International 2022</h5>
                    <p class="card-text">NA'VI vs EG</p>
                    <a href="#" class="btn btn-outline-light">Play</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card text-white bg-dark shadow-lg">
                <img src="/public/assets/img/esl_pro_league.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ESL Pro League 2022</h5>
                    <p class="card-text">Spirit vs OG</p>
                    <a href="#" class="btn btn-outline-light">Play</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="EventsTitle " style="margin-top: 20px">
        <div class="card text-white bg-dark border-light">
            <h1 style="font-size:x-large">How to Play</h1>
        </div>
    </div>


    <div class="card text-white bg-dark border-info" style="margin-top: 5px">
        <div class="card-body ">
            <i class="fa-solid fa-registered"></i>
            <p1 style="margin-left: 5px"> Register | Register your credentials in order to gain access to the following
                features. </p1>
        </div>
    </div>

    <div class="card text-white bg-dark border-info" style="margin-top: 5px">
        <div class="card-body ">
            <i class="fa-solid fa-credit-card"></i>
            <p1 style="margin-left: 5px">Top up | Swipe your card in order to purchase token.</p>
        </div>
    </div>

    <div class="card text-white bg-dark border-info" style="margin-top: 5px">
        <div class="card-body ">
            <i class="fa-solid fa-coins"></i>
            <p1 style="margin-left: 5px">Bet | Watch and Bet from your favorite teams and their rivals.</p>
        </div>
    </div>
</div>



<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/footer.php'; ?>