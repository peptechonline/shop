<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Repairing</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/welcome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/general.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fixed-alert {
            position: fixed;
            top: 10px;
            /* Adjust as needed for the desired vertical position */
            right: 10px;
            /* Adjust as needed for the desired horizontal position */
            z-index: 1000;
            /* Adjust the z-index value as needed to ensure it's on top of other elements */
        }

        #logout_btn{
            display: none;
        }
    </style>


</head>

<body>
    
    <?php $this->load->view("website/header"); ?>
    
    <script>
        var user_id_data = getCookie("user");
        if(user_id_data.length>0) {
            location.href="<?=base_url("main/home");?>";
        }
    </script>


    <!-- ALert boxes start -->
    <div id="success-alert" class="alert alert-success alert-dismissible fade show fixed-alert" role="alert" style="display: none;">
        User registration successful!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div id="failed-alert" class="alert alert-danger alert-dismissible fade show fixed-alert" role="alert" style="display: none;">
        User registration failed!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    <!-- Alert boxes ends -->
    <!-- Hero Section -->
    <section class="jumbotron text-center">
        <div class="row">
            <div class="col-12 col-md-4">
                <h1>Welcome to Mobile Repairing</h1>
                <p>Your trusted partner for mobile repairs</p>
                <a href="#" class="btn btn-primary flip">Sign Up</a>
            </div>



            <div class="col-12 col-md-8">
                <!-- Login Form -->
                <section class="container login-container">

                    <form class="form-login" id="loginForm">
                        <h2 class="mb-2">Login</h2>
                        <div class="form-body">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="login_email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="login_password" placeholder="Enter password">
                            </div>
                            <div class="form-group form-check">
                                <!-- <input type="checkbox" class="form-check-input" id="rememberMe"> -->
                                <!-- <label class="form-check-label" for="rememberMe">Remember me</label> -->
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <div class="mt-3">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </section>

                <section class="container signup-container">

                    <form class="form-login" id="signupForm">
                        <h2 class="mb-2">Signup</h2>
                        <div class="form-body">
                            <!-- first row -->
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="shopName">Shop Name:</label>
                                        <input type="text" class="form-control" id="shopName" placeholder="Enter shop name">
                                    </div>
                                </div>
                            </div>
                            <!-- second row -->
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="contactNo">Contact No.:</label>
                                        <input type="text" class="form-control" id="contactNo" placeholder="Enter contact number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <!-- Third Row -->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="shopAddress">Shop Address:</label><br>
                                        <textarea type="text" class="form-control" id="shopAddress" name="shopAddress" rows="3" placeholder="Enter your address"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Fourth Row -->
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm Password:</label>
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-check">
                                <!-- <input type="checkbox" class="form-check-input" id="rememberMe"> -->
                                <!-- <label class="form-check-label" for="rememberMe">Remember me</label> -->
                            </div>
                            <button type="submit" class="btn btn-primary">Signup</button>
                            <div class="mt-3"></div>
                        </div>
                    </form>

                </section>

            </div>
        </div>



    </section>

    <!-- Services Section -->
    <!-- Services Section -->
    <section class="services container text-center my-5 p-3">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <h4>Screen Replacement</h4>
                    <p>High-quality screen replacements major brands.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <h4>Battery Replacement</h4>
                    <p>Get your battery replaced with genuine parts.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <h4>Software Updates</h4>
                    <p>Update your mobile software for smooth performance.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <h4>Hardware Repairs</h4>
                    <p>From buttons to speakers, we fix it all.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="container text-center my-5 bg-light p-5">
        <h2>What Our Customers Say</h2>
        <p>"I got my iPhone screen replaced. Quick and efficient service!" - John Doe</p>
        <p>"The staff is friendly and they fixed my software issues in no time." - Jane Smith</p>
    </section>

    <!-- Contact Form -->
    <section class="container my-5">
        <h2>Contact Us</h2>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="contact_name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="contact_email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <?php $this->load->view("website/footer"); ?>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    
    $(document).ready(function() {

        // check if the user is Logged In
        


        // Flip the Login Signup Section.
        $(".flip").click(function(e) {
            e.preventDefault(); // Prevent the default behavior of the button

            var $flipButton = $(this);
            var currentText = $flipButton.text();

            if (currentText === "Sign Up") {
                $flipButton.text("Sign In");
            } else {
                $flipButton.text("Sign Up");
            }

            $(".login-container").fadeToggle(300, function() {
                $(".signup-container").fadeToggle(300);
            });
        });


        // Signup Method
        $("#signupForm").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>/api/signup", // Replace with your actual server URL
                data: {
                    name: $("#name").val(),
                    shopName: $("#shopName").val(),
                    contactNo: $("#contactNo").val(),
                    email: $("#email").val(),
                    shopAddress: $("#shopAddress").val(),
                    password: $("#password").val(),
                    confirmPassword: $("#confirmPassword").val()
                },
                dataType: "json", // Change this based on your server response type
                success: function(response) {
                    if (response.success) {

                        $(".flip").click();
                        $("#success-alert").text(response.success);
                        showAlert("#success-alert");
                    } else if (response.error) {
                        $("#failed-alert").text(response.error);
                        showAlert("#failed-alert");
                    } else {
                        alert("Something went wrong");
                        console.log(response);
                    }
                },
                error: function(data) {
                    // Handle errors here
                    console.error(data);
                }
            });
        });


        // Login Logic
        $("#loginForm").submit(function(e) {
            e.preventDefault();

            var email = $("#login_email").val();
            var password = $("#login_password").val();

            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>/api/login", // Replace with your actual login URL
                data: {
                    email: email,
                    password: password
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    // Handle the success response from the server here
                    if (response.success) {
                        setCookie("user", response.success, 30);
                        // $("#success").html(response.message);
                        // showAlert("#success-alert");
                        location.href = "<?= base_url('main/home'); ?>";
                    } else {

                        $("#failed-alert").text(response.message);
                        showAlert("#failed-alert");
                        $("#login_password").val("");
                    }
                },
                error: function(error) {
                    // Handle errors here
                    console.error(error);
                }
            });
        });
    });

    function showAlert(id) {
        $(id).fadeIn();
        setTimeout(function() {
            $(id).fadeOut();
        }, 5000); // 5000 milliseconds = 5 seconds
    }
</script>

</html>