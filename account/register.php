<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyleteros/Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main id="main-area">
        <!--registration-->
        <section id="register">
            <div class="row m-0">
                <div class="col-lg-12">
                    <div class="upload-profile-image d-flex justify-content-center pb-5">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <img class="camera-icon" src="assets/empty_camera.png" alt="camera">
                            </div>
                            <img class="img rounded-circle" style="width: 200px; height: 200px;" src="assets/unknown.jfif" alt="profile">
                            <small class="form-text text-black-50">Choose an Image</small>
                            <input type="file" form="reg-form" class="form-control-file" name="profileImage" id="upload-profile" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <form action="register-process.php" method="POST" enctype="multipart/form-data" id="reg-form">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="first_name" id="firstName" class="form-control" placeholder="First Name*" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="last_name" id="lastName" class="form-control" placeholder="Last Name*" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required>
                                </div>
                            </div>
                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username*" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" required>
                                </div>
                                <div class="col">
                                    <select class="form-control" name="gender" id="gender" required>
                                        <option value="" selected disaled>Gender*</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email*" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required>
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="number" name="phonenumber" id="phonenumber" class="form-control" placeholder="Phone Number*" value="<?php if(isset($_POST['phonenumber'])) echo $_POST['phonenumber']; ?>" required>
                                </div>
                                <div class="col">
                                    <input type="text" onfocus="(this.type = 'date')" placeholder="Birthdate*" name="birthday" id="birthday" class="form-control" value="<?php if(isset($_POST['birthday'])) echo $_POST['birthday']; ?>" required>
                                </div>
                            </div>
                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password*" required>
                                    <small id="confirm_error" class="text-danger"></small>
                                </div>
                                <div class="col">
                                    <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password*" required>
                                </div>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="agreement" class="form-check-input" required>
                                <label for="agreement" class="form-check-label text-black-50">I agree <a href="#">term, conditions, and policy</a>*</label>
                                </input>
                            </div>
                            <div class="form-row my-4">
                                <div class="col">
                                <span class="text-black-50">I already have an Account <a href="login.php">Login</a></span>
                                </div>
                            </div>
                            
                            <div class="submit-btn text-center my-5">
                                <button type="submit" name="save"  class="btn btn-warning rounded-pill text-dark px-5">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </section>
        <!--registration-->



    </main>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
</body>

</html>