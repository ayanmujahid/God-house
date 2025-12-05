<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

<section class="gradient-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">

                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- ================> PageHeader section start here <================== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__area">
                <!-- <div class="pageheader__left">
                    <h3>Contact</h3>
                </div> -->
                <div class="pageheader__right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    
    <!-- ================> Contact section start here <================== -->
    <div class="contact padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__header text-center">
                <h2>Contact Us</h2>
                <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p> -->
            </div>
            <div class="section__wrapper">
                <div class="contact__form">
                    <form class="d-flex flex-wrap justify-content-between" action="https://demos.codexcoder.com/themeforest/html/peace/peace/contact.php" id="contact-form" method="POST">
                        <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                        <input type="text" placeholder="Your Email" id="email" name="email" required>
                        <input class="w-100" type="text" placeholder="Subject" id="subject" name="subject" required>
                        <textarea placeholder="Your Message" rows="8" name="message" id="message" required></textarea>
                        <div class="text-center w-100">
                            <button type="submit" class="default-btn move-right"><span>SEND NOW</span></button>
                        </div>
                    </form>
                    <p class="form-message"></p> 
                </div> 
            </div>
        </div>
    </div>
    <!-- ================> Contact section end here <================== -->


    <!-- ================> Location section start here <================== -->
    <div class="location">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-6 col-12">
                    <div class="location__left">
                        <div class="location__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3482.072718321655!2d-81.0437386!3d29.2214155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e6dbdac9d45c83%3A0xfa187c914262b6b7!2s866%20Mason%20Ave%20Ste%203%2C%20Daytona%20Beach%2C%20FL%2032117%2C%20USA!5e0!3m2!1sen!2s!4v1763237985168!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="location__right padding--top padding--bottom">
                        <div class="location__info">
                            <!-- <div class="location__info-top">
                                <div class="section__header">
                                    <h2>Contact Person</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-thumb">
                                        <img src="assets/images/location/01.jpg" alt="location thumb">
                                    </div>
                                    <div class="location__info-content">
                                        <h6>Deniyel Murchi</h6>
                                        <span>Church Pastor</span>
                                        <ul>
                                            <li><b>Tel:</b>+002145698</li>
                                            <li><b>Email:</b>info@yourmail.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <div class="location__info-bottom">
                                <div class="section__header">
                                    <h2>Contact Info</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-list">
                                        <ul>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                    <p>866 Mason Avenue, Suite 3, Daytona Beach, FL 32117.</p>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="far fa-clock"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                    <ul>
                                                        <li><b>Monday-Thursday :</b> 06:00 am - 09:00 pm</li>
                                                        <li><b>Friday :</b> 10:30 am - 05:30 pm</li>
                                                        <li><b>Saturday :</b> 10:30 am - 05:30 pm</li>
                                                        <li><b>Sunday :</b> Closed</li>
                                                    </ul>
                                                </div> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Location section end here <================== -->

<?php include 'include/footer.php';?>
<?php include 'include/script.php';?>