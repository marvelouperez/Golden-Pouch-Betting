<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/user_header.php';?>
<link href="/public/assets/css/withdraw.css" rel="stylesheet" />

<div class="container d-flex justify-content-center mt-5">
    <div class="card">
        <div>
            <div class="d-flex pt-3 pl-3">
                <div><img src="https://img.icons8.com/ios-filled/50/000000/visa.png" width="60" height="80" /></div>
                <div class="mt-3 pl-2"><span class="name">Martina Thomas</span>
                    <div><span class="cross">&#10005&#10005&#10005&#10005</span><span class="pin ml-2">8880</span></div>
                </div>
            </div>


            <div class="py-2  px-3">
                <div class="first pl-2 d-flex py-2">
                    <div class="form-check">
                        <input type="radio" name="optradio" class="form-check-input mt-3 dot" checked>
                    </div>
                    <div class="border-left pl-2"><span class="head">Wallet Available Balance</span>
                        <div><span class="dollar">$</span><span class="amount">8245</span></div>
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-between px-3 pt-4 pb-3">
                <button type="button" class="btn btn-primary button">Claim Amount</button>
            </div>



        </div>
    </div>

</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/admin_footer.php';?>