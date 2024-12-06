
<?php $__env->startSection('content'); ?>
<div class="page-content">

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr site-bg-dark  twm-primary-overlay-wrap" style="background-image: url(images/banner/banner-12.jpg);">
    <div class="twm-primary-overlay"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- INNER PAGE BANNER END -->   


<!-- Contact Form SECTION START -->
<div class="section-full p-t150 p-b120 site-bg-white twm-contact-section-wrap">

    <div class="container">

        <div class="section-content">
            <div class="twm-contact-section">
                <div class="row">
                    
                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <div class="twm-maskingtext m-b50">
                            <h1>Get In Touch</h1>
                            <img src="images/text-masking-pic.jpg" alt="Image">
                        </div>
                        <div class="twm-get-info-wrap">

                            <ul>

                                <li>
                                    <div class="twm-get-info">
                                        <div class="twm-media">
                                            <i class="feather feather-phone-call"></i>
                                        </div>
                                        <div class="twm-content">
                                            <p>Phone</p>
                                            <h3 class="twm-title"><a href="tel:456-789-1012">+977-98</a></h3>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="twm-get-info">
                                        <div class="twm-media">
                                            <i class="feather feather-mail"></i>
                                        </div>
                                        <div class="twm-content">
                                            <p>Email</p>
                                            <h3 class="twm-title">used.car@westernmotors.com.np</h3>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="twm-get-info">
                                        <div class="twm-media">
                                            <i class="feather feather-home"></i>
                                        </div>
                                        <div class="twm-content">
                                            <p>Address</p>
                                            <h3 class="twm-title">Narayan Gopal Marg, Kathmandu, Nepal</h3>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                            <div class="twm-social">
                                <h3 class="twm-title">Follow Us</h3>
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="https://www.x.com/"><i class="feather feather-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="feather feather-instagram"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="twm-contact-page-detail">
                            <!-- TITLE START-->
                            <div class="section-head left ">
                                <h2 class="twm-large-title">Contact Form</h2>
                                <p class="p-text">Enter your details. And you can feel free to contact 
                                    us for any kind of information.
                                </p>
                            </div>
                            <!-- TITLE END-->

                            <div class="twm-contact-page-form">
                            

                                <div class="contact-form-outer">
                                    <form class="cons-contact-form" method="post" action="https://thewebmax.org/carntel/phpmailer/mail.php">
                            
                                        <div class="row">
    
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-4">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-4">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group mb-4">
                                                <input name="email" type="text" class="form-control" required="" placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group mb-4">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone">
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="col-lg-12">
                                                <div class="form-group mb-5">
                                                <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button dark-bg"><em>Submit Now</em></button>
                                            </div>
                                            
                                        </div>

                                    </form>
                                </div>
                            </div>
                            

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
</div>   
<!-- Contact Form SECTION END -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\western_motors\resources\views/front/contact.blade.php ENDPATH**/ ?>