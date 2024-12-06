
<?php $__env->startSection('content'); ?>

     
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr site-bg-dark  twm-primary-overlay-wrap" style="background-image: url(images/banner/banner-6.jpg);">
                <div class="twm-primary-overlay"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="wt-title">Luxury Car</h2>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <!-- INNER PAGE BANNER END -->   


            <!-- Team SECTION START -->
            <div class="section-full p-t150 p-b120 site-bg-white twm-cars-section-wrap">
                <div class="container">
                      
                    <div class="section-content">
                        <div class=" twm-cars-section m-b30">

                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('vehicle-grid', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-815619902-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    
                            <div class="pagination-outer d-flex justify-content-center">
                                <div class="pagination-style1">
                                    <ul class="clearfix">
                                        <li class="prev"><a href="cars-grid-1.html"><span> <i class="fa-solid fa-chevron-left"></i> </span></a></li>
                                        <li><a href="cars-grid-1.html">1</a></li>
                                        <li class="active"><a href="cars-grid-1.html">2</a></li>
                                        <li><a href="cars-grid-1.html">3</a></li>
                                        <li class="next"><a href="cars-grid-1.html"><span> <i class="fa-solid fa-chevron-right"></i> </span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div> 

                </div>

            </div>   
            <!-- Team SECTION END -->

            <!--SEARCH SECTION START-->
            <div class="twm-search-section-wrap">
                <div class="container">
                    <div class="twm-search-section-area">
                       <h3 class="twm-s-section-title">Available for rent</h3>
                       <div class="twm-vehicle-search-section">

                            <div class="form-group">
                                <label>Choose Vehicle type</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Model</option>
                                    <option value="1">Yamaha</option>
                                    <option value="2">Honda</option>
                                    <option value="3">Suzuki</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Pick up Location</label>
                                <input class="form-control" placeholder="Type...">
                            </div>

                            <div class="form-group">
                                <label>Drop off Location</label>
                                <input class="form-control" placeholder="Type...">
                            </div>
                                
                            <div class="form-group form-group-2column-wrap twm-input-with-icon">
                                <label>Pick up date and time</label>
                                <div class="form-group-2column">
                                    <div class="input-group date datepicker">
                                        <input class="form-control" placeholder="Date">
                                        <span class="input-group-append input-group-addon">
                                            <span class="input-group-text">
                                                <i class="fa fa-solid fa-calendar-days"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="input-group time timepicker">
                                        <input class="form-control" placeholder="Time">
                                        <span class="input-group-append input-group-addon">
                                            <span class="input-group-text">
                                                <i class="fa-regular fa-clock"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-group-2column-wrap twm-input-with-icon">
                                <label>Return date and time</label>
                                <div class="form-group-2column">
                                    <div class="input-group date datepicker">
                                        <input class="form-control" placeholder="Date">
                                        <span class="input-group-append input-group-addon">
                                            <span class="input-group-text">
                                                <i class="fa fa-solid fa-calendar-days"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="input-group time timepicker">
                                        <input class="form-control" placeholder="Time">
                                        <span class="input-group-append input-group-addon">
                                            <span class="input-group-text">
                                                <i class="fa-regular fa-clock"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="twm-vehicle-search-btn">
                                <a href="cars-grid-4.html" class="site-button">
                                    <em>Find A Car</em>
                                </a>
                             </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!--SEARCH SECTION END-->

            <!--CLIENT SLIDER START-->
            <div class="twm-client-slider1-wrap site-bg-white">
                <div class="twm-client-slider1">
                    <div class="owl-carousel home-client-carousel3 owl-btn-vertical-center">
                    
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w1.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w2.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w3.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w4.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w5.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w6.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w1.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w2.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w3.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="images/client-logo/dark/w5.png" alt=""></a></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- CLIENT SLIDER END -->

        </div>
        <!-- CONTENT END -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\western_motors\resources\views/front/cars.blade.php ENDPATH**/ ?>