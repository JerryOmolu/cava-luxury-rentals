<?php
$pageTitle = "Forgot Password - Cava Luxury";
?>

<?php include "includes/header.php"; ?>

<?php
$loaderTitle = "Forgot-Password";
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
                        <h2>Forgot Password</h2>
                        <p class="mt-3 text-white">We will send you a link to reset your password.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!--? Forgot Password Form -->
<section class="contact-section pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-wrapper shadow p-5 rounded bg-light">
                    <h3 class="text-center mb-4">Reset Your Password</h3>
                    <form action="" method="POST">

                        <div class="mb-3">
                            <label for="email" class="form-label" style="font-size: 1.1rem;">Enter your registered email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>

                        <button type="submit" class="btn btn-warning w-100">Send Reset Link</button>

                        <p class="text-center mt-4"><a href="vendor-login.php" class="text-warning">Back to Login</a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Forgot Password Form End -->

<?php include "includes/contact.php"; ?>
<?php include "includes/download.php"; ?>

</main>
<?php include "includes/footer.php"; ?>
