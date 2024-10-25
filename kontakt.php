<!DOCTYPE html>
<html lang="en">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2CE2QHRQ7D"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-2CE2QHRQ7D');
</script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakt - WebFax</title>


    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo1.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description"
        content="Kontaktirajte Webfax za više informacija o našim kursovima, privatnim časovima i mentorstvu. Stojimo vam na raspolaganju za sva vaša pitanja.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/ogency-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.theme.default.min.css" />

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="assets/css/ogency.css" />
</head>

<body>



    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- Preloader -->


    <div class="page-wrapper">
        <!-- Header section starts -->
        <header class="main-header">
            <!-- Nav section starts -->
            <nav class="main-menu">
                <div class="container">
                    <div class="main-menu__wrapper">
                        <div class="main-menu__logo">
                            <a href="index.html">
                                <img src="assets/images/logo1.png" width="100px" height="100px" alt="WebFax logo" />
                            </a>
                        </div>
                        <div class="main-menu__nav">
                            <ul class="main-menu__list">
                                <li>
                                    <a href="index.html">Početna</a>
                                </li>
                                <li class="dropdown">
                                    <a href="obuke.html">Obuke</a>
                                    <ul>
                                        <li><a href="htmlcss.php">HTML&CSS</a></li>
                                        <li><a href="cisco.php">Cisco</a></li>
                                        <li><a href="git.php">Git&Github</a></li>
                                        <li><a href="javascript.php">JavaScript</a></li>
                                        <li><a href="wordpress.php">Wordpress</a></li>
                                        <li><a href="php.php">PHP</a></li>
                                        <li><a href="sql.php">SQL</a></li>
                                    </ul>
                                </li>
                                <li><a href="postanimentor.html">Postani mentor</a></li>
                                <li><a href="tim.html">Naš tim</a></li>
                                <li><a href="privatnicasovi.php">Individualni časovi</a></li>
                                <li><a href="kontakt.php">Kontakt</a></li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <a href="#" class="main-menu__toggler mobile-nav__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Nav section ends -->
        </header>
        <!-- Header section ends -->





        <!-- stricky-header starts -->
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        <!-- stricky-header ends -->





        <!--Contact section starts-->
        <section class="contact-two mt-80">
            <div class="container wow fadeInUp animated" data-wow-delay="300ms">
                <div class="section-title text-center">
                    <h2 class="section-title__tagline section-title__tagline--has-dots">odgovaramo na pitanja u
                        najkraćem roku
                        </h3>
                        <h1 class="section-title__title">Webfax kontakt <br> javite se za više informacija</h1>
                </div>
                <div class="contact-one__left text-center">
                    <div class="contact-one__form-box">
                        <form id="contactForm" action="scripts/contactform.php" method="post"
                            class="contact-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Ime i prezime" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-one__input-box">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Telefon" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-one__input-box text-message-box">
                                        <textarea name="message" placeholder="Poruka"></textarea>
                                    </div>
                                    <!-- Honeypot field -->
                                    <input type="text" name="honeypot" style="display:none">
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="ogency-btn ogency-btn-base">Pitajte nas</button>
                                    </div>
                                    <!-- Feedback message -->
                                    <div id="feedbackMessage" class="feedback-message"></div>
                                </div>
                            </div>
                        </form>

                        <script>
                            $(document).ready(function () {
                                $('#contactForm').submit(function (e) {
                                    e.preventDefault(); // Prevent form submission

                                    // Serialize form data
                                    var formData = $(this).serialize();

                                    // Submit form data using AJAX
                                    $.ajax({
                                        type: 'POST',
                                        url: $(this).attr('action'),
                                        data: formData,
                                        success: function (response) {
                                            $('#feedbackMessage').html(response); // Display feedback message
                                        }
                                    });
                                });
                            });
                        </script>

                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact section ends-->





        <!-- Footer section starts -->
        <footer class="footer">
            <div class="container">
                <div class="footer__top wow fadeInUp animated" data-wow-delay="100ms">
                    <a href="index.html" class="footer__logo">
                        <img src="assets/images/logo1.png" width="100px" height="100px" alt="WebFax logo" />
                    </a>
                    <div class="footer__social">
                        <a href="https://www.linkedin.com/company/webfax"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/webfaxedu"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/web__fax/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6 wow fadeInUp animated" data-wow-delay="200ms">
                        <div class="footer__about">
                            <p class="footer__about-text">Hajde da učimo zajedno</p>
                            <span>contact@webfax.rs</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 wow fadeInUp animated" data-wow-delay="400ms">
                        <ul class="footer__list">
                            <li><a href="sql.php">Baze podataka</a></li>
                            <li><a href="htmlcss.php">HTML&CSS</a></li>
                            <li><a href="javascript.php">JavaScript</a></li>
                            <li><a href="php.php">PHP</a></li>
                            <li><a href="wordpress.php">Wordpress</a></li>
                            <li><a href="cisco.php">Cisco</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 wow fadeInUp animated" data-wow-delay="400ms">
                        <ul class="footer__list">
                            <li><a href="postanimentor.html">Postani mentor</a></li>
                            <li><a href="tim.html">Naš tim</a></li>
                            <li><a href="privatnicasovi.php">Individualni časovi</a></li>
                            <li><a href="kontakt.php">Kontakt</a></li>
                            <li><a href="https://lorem.in.rs/">IT usluge</a></li>
                            <li><a href="obuke.html">Obuke</a></li>
                        </ul>
                    </div>
                </div>
                <p class="footer__copyright wow fadeInUp animated" data-wow-delay="500ms">
                    © Copyright <span class="dynamic-year"></span> by
                    <a href="index.html">WebFax</a>
                </p>
            </div>
        </footer>
        <!-- Footer section ends -->

    </div>





    <!-- Mobile nav section starts -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo1.png" width="70"
                        alt="webfax logo" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:contact@webfax.rs">contact@webfax.rs</a>
                </li>
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:+381601483027">+381601483027</a>
                </li>
            </ul>

            <div class="mobile-nav__social">
                <a href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.facebook.com/webfaxedu"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/web__fax/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile nav section ends -->





    <!-- back-to-top-start -->
    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>
    <!-- back-to-top-end -->


    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <!-- template js -->
    <script src="assets/js/ogency.js"></script>
</body>

</html>