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

<div class="tab-content" id="nav-tabContent">
    <!--1st Tab Pane-->
    <div class="tab-pane fade show active" id="nav-csgo" role="tabpanel" aria-labelledby="nav-csgo-tab">
        <!--Start-->
        <div class="card text-center text-white bg-dark shadow-lg csgo-1">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">ESL Challenger League Season 42 Europe</h5>
                <p class="card-text">Price: $50,000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer text-muted">
                August 16th
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg csgo-1" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">Flow FireLeague 2022 Finals</h5>
                <p class="card-text">Price: $150,000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer text-muted">
                August 22th
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg csgo-1" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">Fragdelphia 2022</h5>
                <p class="card-text">Price: $250,000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer text-muted">
                August 27th
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg csgo-1" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">ESL Challenger Rotterdam 2022</h5>
                <p class="card-text">Price: $250,000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer text-muted">
                September 12th
            </div>
        </div>
        <!--End-->
    </div>

    <!--2nd Tab Pane-->
    <div class="tab-pane fade show active" id="nav-dota2" role="tabpanel" aria-labelledby="nav-dota2-tab">

        <!--Start-->
        <div class="card text-center text-white bg-dark shadow-lg dota2">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large"> The International 2022</h5>
                <p class="card-text">$1,600,000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                Oct 15 - 30, 2022
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg dota2" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large"> ESL One Malaysia 2022</h5>
                <p class="card-text">Price: $400,000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                Aug 23 - 28, 2022
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg dota2" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">PGL Arlington Major 2022</h5>
                <p class="card-text">Price: $500,000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                Aug 04 - 14, 2022
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg dota2" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">European Pro League Season 2</h5>
                <p class="card-text">Price: $20,000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                Jul 16 - Aug 21, 2022
            </div>
        </div>
        <!--End-->

    </div>

    <!--3rd Tab Pane-->
    <div class="tab-pane fade show active" id="nav-LoL" role="tabpanel" aria-labelledby="nav-LoL-tab">

        <!--Start-->
        <div class="card text-center text-white bg-dark shadow-lg LOL">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">2022 LoL World Championship</h5>
                <p class="card-text">$2,225,000 USD</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                TBA
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg LOL" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large"> The Mid-Season Invitational (MSI)</h5>
                <p class="card-text">Price: $250,000 USD</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                In 2022, MSI will be held in Busan, South Korea
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg LOL" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">League of Legends Pro League</h5>
                <p class="card-text">Price: TBA</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                TBA
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg LOL" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">League of Legends Championship Series</h5>
                <p class="card-text">Price: TBA</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                TBA
            </div>
        </div>
        <!--End-->

    </div>

    <!--4th Tab Pane-->
    <div class="tab-pane fade show active" id="nav-valorant" role="tabpanel" aria-labelledby="nav-valorant-tab">

        <!--Start-->
        <div class="card text-center text-white bg-dark shadow-lg valo">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">VCT 2022: North America Stage 2 Challengers</h5>
                <p class="card-text">Price: $200 000</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                13.05.22 - 27.06.22
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg valo" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">VCT 2022: EMEA Stage 2 Challengers</h5>
                <p class="card-text">Price: $210 000 USD</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                13.05.22 - 26.06.22
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg valo" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">VCT 2022: Game Changers Brazil Series 1 - Qualifier 4
                </h5>
                <p class="card-text">Price: $4 082 USD</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                02.06.22 - 05.06.22
            </div>
        </div>
        <div class="card text-center text-white bg-dark shadow-lg valo" style="margin-top: 10px">
            <div class="card text-white bg-dark shadow-lg" style="font-size: large">
                <h5 class="card-title" style="font-size: xx-large">VCT 2022: Vietnam Stage 2 Challengers</h5>
                <p class="card-text">Price: $37 000 USD</p>
                <a href="#" class="btn btn-outline-light">PLAY</a>
            </div>
            <div class="card-footer">
                12.05.22 - 29.05.22
            </div>
        </div>
        <!--End-->

    </div>

</div>



<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/footer.php'; ?>