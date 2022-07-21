<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'; ?>
<?php

if(isset($_POST['login'])){
    if($user_info = $user->login($_POST['username'], $_POST['password'])){
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['account'] = $user_info;
        
        header("Location: /");
    } else{
        header("Location: /public/login_failed.php");
        exit;
    }
} 

?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>

<form method="POST" action="/public/authentication/login">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <input type="text" name="username" id="typeEmailX"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX">Username</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" name="password" id="typePasswordX"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">Password</label>
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                            <button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">Login</button>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="/register"
                                    class="text-white-50 fw-bold">Sign
                                    Up</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/footer.php'; ?>