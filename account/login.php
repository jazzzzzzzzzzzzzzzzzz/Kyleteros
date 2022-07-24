<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyleteros/Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main id="main-area">
        <!--login-->
        <section id="login-form">
            <div class="row m-0">
                <div class="col-lg-12">
                    <div class="upload-profile-image d-flex justify-content-center pb-5">
                        <div class="text-center">
                            <img class="img rounded-circle" style="width: 200px; height: 200px;" src="assets/unknown.jfif" alt="profile">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <form action="login-process.php" method="POST" enctype="multipart/form-data" id="log-form">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>
                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password*">
                                    <small id="confirm_error" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="form-row my-4">
                                <div class="col">
                                <span class="text-black-50">Don't have an account yet? <a href="register.php">Create now!</a></span>
                                </div>
                            </div>
                            <div class="submit-btn text-center my-5">
                                <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--LOGIN-->
    </main>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
</body>

</html>