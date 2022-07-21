<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>

<nav class="nav nav-tabs flex-sm-row li-games" id="nav-tab" role="tablist">
    <!-- CSGO -->
    <button class="btn btn-outline-light" id="nav-csgo-tab" data-bs-toggle="tab" data-bs-target="#nav-csgo"
        type="button" role="tab" aria-controls="nav-csgo" aria-selected="true">
        <h1 style="font-size:large">
            <img src="/assets/img/icons8-counter-strike-global-offensive-100.png" alt="" width="30" height="30"> Counter
            Strike : Global Offensive
        </h1>
    </button>
    <!-- DOTA 2 -->
    <button class="btn btn-outline-light" id="nav-dota2-tab" data-bs-toggle="tab" data-bs-target="#nav-dota2"
        type="button" role="tab" aria-controls="nav-dota2" aria-selected="false">
        <h1 style="font-size:x-large">
            <img src="/assets/img/icons8-dota-2-100.png" alt="" width="30" height="30"> DOTA 2
        </h1>
    </button>
    <!-- LOL -->
    <button class="btn btn-outline-light" id="nav-LoL-tab" data-bs-toggle="tab" data-bs-target="#nav-LoL" type="button"
        role="tab" aria-controls="nav-LoL" aria-selected="false">
        <h1 style="font-size:x-large">
            <img src="/assets/img/icons8-league-of-legends-100.png" alt="" width="30" height="30"> League of Legends
        </h1>
    </button>
    <!-- VALORANT -->
    <button class="btn btn-outline-light" id="nav-valorant-tab" data-bs-toggle="tab" data-bs-target="#nav-valorant"
        type="button" role="tab" aria-controls="nav-valorant" aria-selected="false">
        <h1 style="font-size:x-large">
            <img src="/assets/img/icons8-valorant-100.png" alt="" width="30" height="30"> Valorant
        </h1>
    </button>
</nav>

<!-- START TAB CONTENT -->
<div class="tab-content" id="nav-tabContent">
    <!--1st Tab Pane-->
    <div class="tab-pane fade show active" id="nav-csgo" role="tabpanel" aria-labelledby="nav-csgo-tab">

        <div class="EventsTitle" style="margin-top: -0px">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Watch</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/Xn-bGsnfu9w" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->

        <div class="EventsTitle">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Highlights</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/Xn-bGsnfu9w" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->

        <div class="EventsTitle">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Live</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/Xn-bGsnfu9w" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/esl_pro_league.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">ESL PRO LEAGUE 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->
    </div>

    <!--2nd Tab Pane-->
    <div class="tab-pane fade" id="nav-dota2" role="tabpanel" aria-labelledby="nav-dota2-tab">

        <div class="EventsTitle" style="margin-top: -0px">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Watch</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/lt5QwqdNLFM" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">ESL ONE MALAYSIA 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->

        <div class="EventsTitle">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Highlights</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/lt5QwqdNLFM" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">ESL ONE MALAYSIA 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->

        <div class="EventsTitle">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Live</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/lt5QwqdNLFM" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">ESL ONE MALAYSIA 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/the_international_2022.webp" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">The International 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->
    </div>

    <!--3rd Tab Pane-->
    <div class="tab-pane fade" id="nav-LoL" role="tabpanel" aria-labelledby="nav-LoL-tab">
        <div class="EventsTitle" style="margin-top: -0px">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Watch</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/pFt-MyYlrLI" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">LPL SUMMER SPLIT 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->

        <div class="EventsTitle">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Highlights</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/pFt-MyYlrLI" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">LPL SUMMER SPLIT 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->

        <div class="EventsTitle">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Live</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/pFt-MyYlrLI" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">LPL SUMMER SPLIT 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/worlds_2022.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">WORLDS 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->
    </div>

    <!--4th Tab Pane-->
    <div class="tab-pane fade" id="nav-valorant" role="tabpanel" aria-labelledby="nav-valorant-tab">
        <div class="EventsTitle" style="margin-top: -0px">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Watch</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/nFiA5BIFO98" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">Valorant Champions Tour Stage 2 : Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->

        <div class="EventsTitle">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Highlights</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/nFiA5BIFO98" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">Valorant Champions Tour Stage 2 : Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->

        <div class="EventsTitle">
            <div class="card text-white bg-dark">
                <h1 style="font-size:x-large">Live</h1>
            </div>
        </div>

        <!--CARDS-->
        <div class="container hero-section-4" style="margin-top: 30px">
            <div class="row">
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <iframe src="https://www.youtube.com/embed/nFiA5BIFO98" style="border-radius: 10px 10px 10px 10px;">
                    </iframe>
                    <div class="card-body">
                        <p class="card-text">Valorant Champions Tour Stage 2 : Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
                <div class="card col text-white bg-dark shadow-lg cards" style="width: 18rem;">
                    <img class="card-img-top" src="/public/assets/img/vct masters copenhagen.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">VCT | Masters Copenhagen</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARDS-->
    </div>
</div>


</div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/footer.php'; ?>