<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">    
    <meta name="description" content="">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    
    <!-- PAGE TITLE HERE -->
    <title>Carntel Template | Home Page 1</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/animate.min.css"><!-- WOW ANIMATION STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/lc_lightbox.css"><!-- LC LIGHT BOX POPUP -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/swiper-bundle.min.css"><!-- SWIPER Slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/bootstrap-datetimepicker.min.css"><!-- DATETIMEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/style.css"><!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/jquery.mCustomScrollbar.min.css"><!-- CUSTOM SCROLLBAR -->
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


</head>

<body>

    <!-- LOADING AREA START ===== -->
    <!-- <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <img class="loader-gif" src="<?php echo e(asset('assets')); ?>/images/loader-car.gif" alt="loader Image">
        </div>
    </div> -->
    <!-- LOADING AREA  END ====== -->

	<div class="page-wraper">
        
        <?php echo $__env->make('layouts.partial.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.partial.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <!-- FOOTER START -->
        <footer class="footer-dark">
            <div class="container">
                <!-- FOOTER BLOCKES START -->  
                <div class="footer-top">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4">
                            
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="index-2.html"><img src="<?php echo e(asset('assets')); ?>/images/logo-f.png" alt="Image"></a>
                                </div>
                                <div class="f-about-info">
                                    We offer a range of the finest and most premium cars and bikes on rent.
                                </div>
                                <ul class="ftr-list">
                                    <li><i class="feather feather-phone-call"></i><a href="tel:1236540214">+977-9851101428</a></li>
                                    <li><i class="feather feather-mail"></i>used.car@westernmotors.com.np</li>
                                    <li><i class="feather feather-home"></i>Narayan Gopal Marg, Kathmandu, Nepal</li>
                                </ul>
                                <div class="twm-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.x.com/"><i class="feather feather-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="feather feather-instagram"></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>                            
                            
                        </div> 

                        <div class="col-xl-8 col-lg-8">
                            <div class="ftr-right-section">
                                
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-6 m-b20">
                                        
                                        <div class="widget widget_time-duraion">
                                            <h3 class="widget-title">Quick Links</h3>
                                            <ul>
                                                <li><span>Monday - Friday:</span>09:00 AM - 09:00 PM</li>
                                                <li><span>Sunday:</span>09:00 AM - 07:00PM </li>
                                                <li><span>Saturday:</span>Closed </li>
                                            </ul>
                                        </div>
                                        
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-6 m-b20">
                                        
                                        <div class="widget widget_services">
                                            <h3 class="widget-title">Quick Links</h3>
                                            <ul>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="faq.html">FAQ’s</a></li>
                                                <li><a href="service.html">Services</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="contact-us.html">Contact</a></li>
                                            </ul>
                                        </div>
                                        
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 m-b20">
                                        
                                        <div class="widget widget_services">
                                            <h3 class="widget-title">Vehicles Type</h3>
                                            <ul class="gris-2-column">
                                                <li><a href="cars-detail.html">SUVs</a></li>
                                                <li><a href="cars-detail.html">Sport Coupe</a></li>
                                                <li><a href="cars-detail.html">Convertible</a></li>
                                                <li><a href="cars-detail.html">Wagon</a></li>
                                                <li><a href="cars-detail.html">Sedan</a></li>
                                                <li><a href="cars-detail.html">Yamaha R15</a></li>
                                                <li><a href="cars-detail.html">BMW S 1000 RR</a></li>
                                                <li><a href="cars-detail.html">Kawasaki</a></li>
                                                <li><a href="cars-detail.html">Hayabusa</a></li>
                                                <li><a href="cars-detail.html">Harley Davidson</a></li>
                                            </ul>
                                        </div>
                                        
                                    </div>
    
                                </div> 

                                <div class="twm-subscribe-nl">
                                    <div class="twm-nl-title">
                                        Subscribe To Our Newsletter Today! 
                                    </div>
                                    <div class="twm-nl-section">
                                        <form>
                                            <div class="ftr-nw-form">
                                                <input name="news-letter" class="form-control" placeholder="Email address..." type="text">
                                                <button class="ftr-nw-subcribe-btn"><i class="feather feather-arrow-up-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="footer-bottom-info">
                    <div class="footer-copy-right">
                        <span class="copyrights-text">© 2024<span class="site-text-primary">Western Motors</span> All  rights reserved.</span>
                    </div>
                </div>
            </div>
    
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

 	</div>

<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="<?php echo e(asset('assets')); ?>/js/jquery-3.7.1.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?php echo e(asset('assets')); ?>/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script src="<?php echo e(asset('assets')); ?>/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo e(asset('assets')); ?>/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="<?php echo e(asset('assets')); ?>/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script src="<?php echo e(asset('assets')); ?>/js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script src="<?php echo e(asset('assets')); ?>/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="<?php echo e(asset('assets')); ?>/js/isotope.pkgd.min.js"></script><!-- MASONRY -->
<script src="<?php echo e(asset('assets')); ?>/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY -->
<script src="<?php echo e(asset('assets')); ?>/js/owl.carousel.min.js"></script><!-- OWL SLIDER -->
<script src="<?php echo e(asset('assets')); ?>/js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script src="<?php echo e(asset('assets')); ?>/js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script src="<?php echo e(asset('assets')); ?>/js/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="<?php echo e(asset('assets')); ?>/js/wow.min.js"></script><!-- WOW ANIMATION JS -->
<script src="<?php echo e(asset('assets')); ?>/js/custom.js"></script><!-- CUSTOM FUCTIONS -->
<script src="<?php echo e(asset('assets')); ?>/js/tickerNews.min.js"></script><!-- TICKERNEWS-->
<script src="<?php echo e(asset('assets')); ?>/js/moment.min.js"></script><!-- REQUIRE FOR BOOTSTRAP DATETIMEPICKER -->
<script src="<?php echo e(asset('assets')); ?>/js/bootstrap-datetimepicker.min.js"></script><!-- BOOTSTRAP DATETIMEPICKER -->
<script src="<?php echo e(asset('assets')); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script><!-- CUSTOM SCROLLBAR JS -->
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


</body>


</html>
<?php /**PATH C:\xampp\htdocs\laravel\western_motors\resources\views/layouts/primary.blade.php ENDPATH**/ ?>