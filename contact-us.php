<?php
$pageTitle = "Contact Us - Cava Luxury";
?>

<?php include "includes/header.php"; ?>

<?php
$loaderTitle = "Contact";
?>

<?php include "includes/loader.php"; ?>

<?php include "includes/navbar.php"; ?>
<br><br>

<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70 text-center">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!--? Contact Area Start -->
    <section class="contact-section pt-5 pb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h1 class="contact-title" style="color:white;">Get in Touch</h1>
                </div>
            </div>
            <hr>
            <div class="row">

                <!-- Google Map -->
                <div class="col-lg-6 mb-4">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" src="https://www.google.com/maps/embed/v1/place?q=Plot%20388%20Constitution%20Ave%2C%20Central%20Business%20District%2C%20Abuja-FCT&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <form class="contact_form" action="" method="POST" id="contactForm" novalidate="novalidate">
                        <div class="form-group mb-3">
                            <textarea class="form-control form-control-lg" name="message" id="message" rows="5" placeholder="Enter Message" required></textarea>
                        </div><br><br>
                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg" name="name" id="name" type="text" placeholder="Enter your name" required>
                        </div><br><br>
                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Email" required>
                        </div><br><br>
                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
                        </div><br><br>
                        <div class="form-group mt-4">
                            <center><button type="submit" class="btn btn-warning btn-lg">Send Message</button></center>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!--? Contact Area End -->

<?php include "includes/contact.php"; ?>

</main>
<?php include "includes/footer.php"; ?>
