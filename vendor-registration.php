<?php
$pageTitle = "Vendor Registration - Cava Luxury";
?>

<?php include "includes/header.php"; ?>

<?php
$loaderTitle = "Vendor-Reg";
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
                        <h2>Vendor Registration</h2>
                        <p class="mt-3 text-white">Join our network and showcase your luxury fleet to premium clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!--? Vendor Registration Form -->
<section class="contact-section pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-wrapper shadow p-5 rounded bg-light">
                    <h3 class="text-center mb-4">Vendor Registration Form</h3>
                    <form action="" method="POST">

                        <!-- Vendor Details -->
                        <div class="col-md-9 mb-3">
                        <label for="companyName" class="font-weight-bold" style="font-size: 1.2rem;">Company Name</label>
                        <input type="text" name="companyName" class="form-control form-control-lg" required>
                        </div>
                        
                         <div class="col-md-9 mb-3">
                        <label for="contactPerson" class="font-weight-bold" style="font-size: 1.2rem;">Contact Person</label>
                        <input type="text" name="contactPerson" class="form-control" required>
                        </div>
                        
                        <div class="col-md-9 mb-3">
                        <label for="email" class="font-weight-bold" style="font-size: 1.2rem;">Email Address</label>
                        <input type="email" name="emailAddress" class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-9 mb-3">
                        <label for="phone" class="font-weight-bold" style="font-size: 1.2rem;">Phone Number</label>
                        <input type="tel" name="phone" class="form-control form-control-lg" maxlength="11" required>
                        </div>
                        
                        <div class="col-md-9 mb-3">
                        <label for="address" class="font-weight-bold" style="font-size: 1.2rem;">Business Address</label>
                        <textarea name="address" class="form-control form-control-lg" id="address" rows="3" required></textarea>
                        </div>
                        
                        <div class="col-md-9 mb-3">
                        &nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="terms" required> &nbsp; I agree to the <a href="#" style="color:red;">terms and conditions</a>.
                        </div>

                        <center><button type="submit" name="submit" class="btn btn-warning">Register Now</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Vendor Registration Form End -->

<?php include "includes/contact.php"; ?>
<?php include "includes/download.php"; ?>

</main>
<?php include "includes/footer.php"; ?>
