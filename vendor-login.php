<?php
$pageTitle = "Vendor Login - Cava Luxury";
?>

<?php include "includes/header.php"; ?>

<?php
$loaderTitle = "Vendor-Login";
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
                        <h2>Vendor Login</h2>
                        <p class="mt-3 text-white">Access your dashboard to manage your fleet and bookings.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!--? Vendor Login Form -->
<section class="contact-section pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-wrapper shadow p-5 rounded bg-light">
                    <h3 class="text-center mb-4">Vendor Login</h3>
                    <form action="" method="POST">

                        <div class="mb-3">
                            <label for="email" class="form-label font-weight-bold" style="font-size: 1.2rem;">Email Address</label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label font-weight-bold" style="font-size: 1.2rem;">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" id="password" required>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                                <label class="form-check-label" for="rememberMe">&nbsp; Remember me</label>
                            </div>
                            <a href="forgot-password" class="text-warning">Forgot Password?</a>
                        </div>

                        <button type="submit" class="btn btn-warning w-100">Login</button>

                        <p class="text-center mt-4">Don't have an account? <a href="vendor-registration" class="text-warning">Register here</a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Vendor Login Form End -->

<?php include "includes/contact.php"; ?>
<?php include "includes/download.php"; ?>

</main>
<?php include "includes/footer.php"; ?>
