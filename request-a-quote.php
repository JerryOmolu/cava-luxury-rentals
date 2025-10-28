<?php
$pageTitle = "Request a Quote - Cava Luxury";
?>

<?php include "includes/header.php"; ?>

<?php
$loaderTitle = "Request";
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
                            <h2>Request a Quote</h2>
                            <p class="mt-3 text-white">Tell us what you need and we will provide a tailored quote just for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!--? Request Form Section -->
    <section class="contact-section pt-5 pb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <h2 class="contact-title" style="font-size: 2.5rem; color: white;">Request Your Personalized Quote</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form class="contact_form" action=" " method="POST" id="quoteForm" novalidate="novalidate">

                    <!-- Full Name -->
                    <div class="form-group mb-4">
                        <label for="name" class="font-weight-bold" style="font-size: 1.2rem;">Full Name</label>
                        <input class="form-control form-control-lg" name="name" id="name" type="text" placeholder="Full Name" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-4">
                        <label for="email" class="font-weight-bold" style="font-size: 1.2rem;">Email Address</label>
                        <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Email Address" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group mb-4">
                        <label for="phone" class="font-weight-bold" style="font-size: 1.2rem;">Phone Number</label>
                        <input class="form-control form-control-lg" name="phone" id="phone" type="text" placeholder="Phone Number" required>
                    </div>
                     <br>
                    <!-- Service Type -->
                    <div class="form-group mb-4">
<!--                        <label for="service_type" class="font-weight-bold" style="font-size: 1.2rem;">Service Type</label>-->
                        <select class="form-control form-control-lg" name="service_type" id="service_type" required>
                            <option value="">Select Service Type</option>
                            <option value="Chauffeur Service">Chauffeur Service</option>
                            <option value="Self Drive">Self Drive</option>
                            <option value="Private Jet">Private Jet</option>
                            <option value="Luxury Train">Luxury Train</option>
                            <option value="Special Security Escort">Special Security Escort</option>
                        </select>
                    </div>
                     <br><br><br><br>
                    <!-- Date -->
                    <div class="form-group mb-4">
<!--                        <label for="date" class="font-weight-bold" style="font-size: 1.2rem;">Date</label>-->
                        <input class="form-control form-control-lg" name="date" id="date" type="date" required>
                    </div>

                    <!-- Message -->
                    <div class="form-group mb-4">
                        <label for="message" class="font-weight-bold" style="font-size: 1.2rem;">Additional Information</label>
                        <textarea class="form-control form-control-lg" name="message" id="message" rows="5" placeholder="Additional Information (optional)"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-warning btn-lg">Submit Request</button>
                    </div>

                </form>
                <div id="formAlert" class="mt-4 text-center"></div>
            </div>
        </div>

    </div>
</section>

    <!--? Request Form Section End -->

<?php include "includes/contact.php"; ?>

</main>
<?php include "includes/footer.php"; ?>
