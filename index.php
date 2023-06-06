<?php include('pages/common/head.php');
include 'pages/database/dbconnect.php'; ?>

<?php
$login = false;
// $showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["username"];
    $password = $_POST["password"];
    $sql = "Select * from `dashboard_accounts` where userName='$userName'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                echo '<script>alert("Login!")</script>';
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $userName;
                header("location: pages/dashboard.php");
            } else {
                echo '<script>alert("Invalid Credentials!")</script>';
                // $showError = "Invalid Credentials";
            }
        }
    } else {
        echo '<script>alert("Invalid Credentials!")</script>';
        // $showError = "Invalid Credentials";
        // header("location: ./signup.php");
    }
}
?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post" action="index.php">
                                        <div class="form-group">
                                            <input type="text" required class="form-control form-control-user" name="username" aria-describedby="emailHelp" placeholder="Enter your Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required class="form-control form-control-user" name="password" placeholder="Password">
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input required type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <!-- <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="pages/register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('pages/common/bottomjs.php');
    ?>
    <!-- Page level plugins -->
</body>

</html>