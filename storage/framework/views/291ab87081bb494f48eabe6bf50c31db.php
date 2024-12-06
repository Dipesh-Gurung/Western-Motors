
<?php $__env->startSection('content'); ?>

        <!-- CONTENT START -->
        <div class="page-content">

            <!--BANNER START-->
            <div class="twm-home-1-banner-wrap">
                <div class="twm-home-1-banner"  style="background-image: url(<?php echo e(asset('assets')); ?>/images/main-slider/slider1/slider1.jpg);">
                    <div class="twm-banner-LR-wrap">
                        <div class="twm-banner-left">
                            <div class="twm-banner-left-info">
                                <div class="twm-banner-left-content">

                                    
                                    <h2 class="twm-banner-title">
                                        <em class="txt-type" data-wait="3000" data-words='["The Best Rental", "Wide Range of"]'></em>
                                        Cars
                                    </h2>

                                    <div class="twm-banner-search-tabs">

                                        <h3 class="twm-tabs-title">
                                            Available Cars 
                                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('blog-grid-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3180074086-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?> 
                                        </h3>

                                        <div class="twm-banner-tabs-filter">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab">
                                                    <!-- Car Tabs-->
                                                    <div class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-Car">
                                                        <div class="twm-tabs-bx">
                                                            <div class="tabs-media">
                                                                <img src="<?php echo e(asset('assets')); ?>/images/tabs-icon/car.png" alt="#">
                                                            </div>
                                                            <div class="tabs-title">Car</div>
                                                        </div>
                                                    </div>
                                                  <!-- Van Tabs-->
                                                  <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-Van">
                                                    <div class="twm-tabs-bx">
                                                        <div class="tabs-media">
                                                            <img src="<?php echo e(asset('assets')); ?>/images/tabs-icon/van.png" alt="#">
                                                        </div>
                                                        <div class="tabs-title">Van</div>
                                                    </div>
                                                </div>
                                                <!-- Minibus Tabs-->
                                                <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-Minibus">
                                                    <div class="twm-tabs-bx">
                                                        <div class="tabs-media">
                                                            <img src="<?php echo e(asset('assets')); ?>/images/tabs-icon/minibus.png" alt="#">
                                                        </div>
                                                        <div class="tabs-title">Minibus</div>
                                                    </div>
                                                </div>
                                                <!-- Coupe Tabs-->
                                                <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-coupe">
                                                    <div class="twm-tabs-bx">
                                                        <div class="tabs-media">
                                                            <img src="<?php echo e(asset('assets')); ?>/images/tabs-icon/coupe.png" alt="#">
                                                        </div>
                                                        <div class="tabs-title">Coupe</div>
                                                    </div>
                                                </div>
                                                <!-- Bike Tabs-->
                                                <div class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-bike">
                                                    <div class="twm-tabs-bx">
                                                        <div class="tabs-media">
                                                            <img src="<?php echo e(asset('assets')); ?>/images/tabs-icon/bike.png" alt="#">
                                                        </div>
                                                        <div class="tabs-title">Bike</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">  
                                                <!-- Car Detail -->
                                                <div class="tab-pane fade show active" id="nav-Car">
                                                    <div class="twm-tabs-search-section">

                                                        <form>
                                                            <div class="row m-b20">
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Choose Vehicle type</label>
                                                                        <select class="form-select form-control" aria-label="Default select example">
                                                                            <option selected>Model</option>
                                                                            <option value="1">Yamaha</option>
                                                                            <option value="2">Honda</option>
                                                                            <option value="3">Suzuki</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Pick up Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Drop off Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                            </div>
    
                                                            <div class="twm-tabs-search-btn">
                                                                <a href="cars-grid-4.html" class="site-button">
                                                                    <em>Find A vehicle</em>
                                                                </a>
                                                            </div>
                                                        </form>
                                                            
                                                    </div>
                                                </div>
                                                <!-- Van Detail -->
                                                <div class="tab-pane fade" id="nav-Van">
                                                    <div class="twm-tabs-search-section">

                                                        <form>
                                                            <div class="row m-b20">
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Choose Vehicle type</label>
                                                                        <select class="form-select form-control" aria-label="Default select example">
                                                                            <option selected>Model</option>
                                                                            <option value="1">Yamaha</option>
                                                                            <option value="2">Honda</option>
                                                                            <option value="3">Suzuki</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Pick up Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Drop off Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                            </div>
    
                                                            <div class="twm-tabs-search-btn">
                                                                <a href="cars-grid-4.html" class="site-button">
                                                                    <em>Find A vehicle</em>
                                                                </a>
                                                            </div>
                                                        </form>
                                                            
                                                    </div>
                                                </div>
                                                <!-- Minibus Detail -->
                                                <div class="tab-pane fade" id="nav-Minibus">
                                                    <div class="twm-tabs-search-section">

                                                        <form>
                                                            <div class="row m-b20">
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Choose Vehicle type</label>
                                                                        <select class="form-select form-control" aria-label="Default select example">
                                                                            <option selected>Model</option>
                                                                            <option value="1">Yamaha</option>
                                                                            <option value="2">Honda</option>
                                                                            <option value="3">Suzuki</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Pick up Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Drop off Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                            </div>
    
                                                            <div class="twm-tabs-search-btn">
                                                                <a href="cars-grid-4.html" class="site-button">
                                                                    <em>Find A vehicle</em>
                                                                </a>
                                                            </div>
                                                        </form>
                                                            
                                                    </div>
                                                </div>
                                                <!-- Coupe Detail-->
                                                <div class="tab-pane fade" id="nav-coupe">
                                                    <div class="twm-tabs-search-section">

                                                        <form>
                                                            <div class="row m-b20">
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Choose Vehicle type</label>
                                                                        <select class="form-select form-control" aria-label="Default select example">
                                                                            <option selected>Model</option>
                                                                            <option value="1">Yamaha</option>
                                                                            <option value="2">Honda</option>
                                                                            <option value="3">Suzuki</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Pick up Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Drop off Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                            </div>
    
                                                            <div class="twm-tabs-search-btn">
                                                                <a href="cars-grid-4.html" class="site-button">
                                                                    <em>Find A vehicle</em>
                                                                </a>
                                                            </div>
                                                        </form>
                                                            
                                                    </div>
                                                </div>
                                                <!-- Bike Details-->
                                                <div class="tab-pane fade" id="nav-bike">
                                                    <div class="twm-tabs-search-section">

                                                        <form>
                                                            <div class="row m-b20">
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Choose Vehicle type</label>
                                                                        <select class="form-select form-control" aria-label="Default select example">
                                                                            <option selected>Model</option>
                                                                            <option value="1">Yamaha</option>
                                                                            <option value="2">Honda</option>
                                                                            <option value="3">Suzuki</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Pick up Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Drop off Location</label>
                                                                        <input class="form-control" placeholder="Type...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
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
                                                                </div>
                                                            </div>
    
                                                            <div class="twm-tabs-search-btn">
                                                                <a href="cars-grid-4.html" class="site-button">
                                                                    <em>Find A vehicle</em>
                                                                </a>
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
                        <div class="twm-banner-right">
                            <div class="twm-banner-right-section">
                                <div class="twm-banner-r-content">
                                    <div class="twm-banner-r-bx">
                                        <h1 class="twm-bnr-title">Hyundai</h1>
                                        <div class="twm-banner-product-price">
                                            <div class="twm-product-name">Hyundai</div>
                                            <div class="twm-price-section">
                                                <div class="v-price" id="number_notification">NPR48,00,000</div>
                                                
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <div class="twm-banner-media">
                                    <img src="<?php echo e(asset('assets')); ?>/images/main-slider/slider1/car.png" alt="Car Pic">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!--BANNER END-->

            <!--WIDE RANGE SECTION START-->
            <div class="section-full p-t150 p-b120 site-bg-white twm-w-range-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
                <div class="container">

                   
                    <!-- TITLE START-->
                    <div class="section-head center ">
                        <div class="twm-sm-title left">Find your car by car brand</div>
                        <h2 class="twm-large-title site-text-dark">Wide Range Of Commercial 
                            And Luxury Cars
                        </h2>
                    </div>
                    <!-- TITLE END-->
                    

                    <div class="section-content">
                        <div class="row twm-w-range-section">
                            
                            <!--One block-->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="twm-cntr-with-icon">
                                    <div class="icon-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/icons/rental.png" alt="">
                                    </div>
                                    <span class="counter">4500</span> <em class="symble">+</em>
                                    <h3 class="icon-content-info">Client Served</h3>
                                </div> 
                            </div>

                            <!--Two block-->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="twm-cntr-with-icon">
                                    <div class="icon-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/icons/man.png" alt="">
                                    </div>
                                    <span class="counter">2750</span> <em class="symble">+</em>
                                    <h3 class="icon-content-info">Happy Customers</h3>
                                </div> 
                            </div>

                            <!--Three block-->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="twm-cntr-with-icon">
                                    <div class="icon-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/icons/car-insurance.png" alt="">
                                    </div>
                                    <span class="counter">600</span> <em class="symble">+</em>
                                    <h3 class="icon-content-info">Vehicle In Stock Cars</h3>
                                </div> 
                            </div>

                            <!--Four block-->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="twm-cntr-with-icon">
                                    <div class="icon-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/icons/work-time.png" alt="">
                                    </div>
                                    <span class="counter">12</span> <em class="symble">+</em>
                                    <h3 class="icon-content-info">Years Experience</h3>
                                </div> 
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!--WIDE RANGE SECTION END-->

            <!--EXPLORE BRAND START-->
            <div class="section-full twm-explore-section-wrap site-bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12">
                            <!-- TITLE START-->
                            <div class="section-head left">
                                <div class="twm-sm-title left site-text-white">Car Brands</div>
                                <h2 class="twm-large-title site-text-white">Explore Our Premium Brands</h2>
                            </div>
                            <!-- TITLE END-->
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="twm-mid-section-car">
                                <div class="twm-media">
                                    <img src="<?php echo e(asset('assets')); ?>/images/explore-sec-image.png" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-12">
                            <div class="twm-mid-section-btn">
                                <a href="cars-grid-4.html" class="site-button">
                                    <em>View All Brands</em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--EXPLORE BRAND END-->

            <!--CLIENT SLIDER START-->
            <div class="twm-client-slider1-wrap site-bg-white">
                <div class="twm-client-slider1">
                    <div class="owl-carousel home-client-carousel3 owl-btn-vertical-center">
                    
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w1.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w2.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w3.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w4.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w5.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w6.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w1.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w2.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w3.png" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="cars-grid-4.html"><img src="<?php echo e(asset('assets')); ?>/images/client-logo/dark/w5.png" alt=""></a></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- CLIENT SLIDER END -->

            <!--ABOUT US SECTION START-->
            <div class="section-full site-bg-white p-t150 p-b120 twm-abus-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
                <div class="container">
                    <div class="row twm-abus-section">

                        <div class="col-lg-7 col-md-12">
                            <div class="twm-abus-left">
                                <div class="twm-media">
                                    <img src="<?php echo e(asset('assets')); ?>/images/abus-pic.jpg" alt="Image">
                                    <div class="twm-abus-video">
                                        <a href="https://vimeo.com/337649532" class="mfp-video ">
                                            <i class="icon fa fa-play"></i>
                                        </a>
                                    </div>
                                    <div class="twm-abus-year-section">
                                        <div class="tem-abus-year-content">
                                            <span>Since</span>
                                            <h2 class="year-title">2016</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="twm-media2">
                                    <img src="<?php echo e(asset('assets')); ?>/images/car-pic1.png" alt="Image">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-5 col-md-12">
                            <!-- TITLE START-->
                            <div class="section-head left aside-section">
                                <div class="twm-sm-title left">About Us</div>
                                <h2 class="twm-large-title site-text-dark">
                                    We Have Many Provided 
                                    Assistance To People And 
                                    Companies In This Field
                                </h2>
                                <div class="section-head-detail">
                                    I must explain to you how all this mistaken idea of denouncing pleasure 
                                    and praising pain was born and I will give you a complete account of the 
                                    system, and expound the actual teachings of the great explorer of the 
                                    truth, the master-builder of human happiness. No one rejects, dislikes, 
                                    or avoids pleasure itself, because it is pleasure,
                                </div>
                            </div>
                            <!-- TITLE END-->
                            <div class="twm-inline-list2">
                                <ul>
                                    <li>All Type Vehicle Available</li>
                                    <li>You Get 24/7 Roadside Assistance</li>
                                    <li>We Are The Nepal's Popular Provider</li>
                                </ul>
                            </div>
                            <div class="twm-btn-left">
                                <a href="about-us.html" class="site-button">
                                    <em>Read More</em>
                                </a>
                             </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--ABOUS US SECTION END-->

            <!--LET'S YOUR ADVENTURE SECTION START-->
            <div class="section-full p-t150 p-b120 site-bg-dark twm-step-towards-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
            <div class="twm-half-bg-pic" style="background-image: url(<?php echo e(asset('assets')); ?>/images/half-bg-pic.jpg);"></div>
            <div class="container">

              <div class="row">
                  <div class="col-lg-6 col-md-12">
                      <!-- TITLE START-->
                      <div class="section-head left">
                          <div class="twm-sm-title left">One step towards you</div>
                          <h2 class="twm-large-title site-text-white">Let's Your Adventure Begin</h2>
                      </div>
                      <!-- TITLE END-->
                  </div>
              </div>

              <div class="section-content">
                  <div class="row twm-step-towards-section">
                      
                      <div class="col-xl-4 col-lg-4 col-md-4 m-b30">
                          <div class="twm-icon-style-left large-set in-dark-area">
                              <div class="twm-media">
                                  <img src="<?php echo e(asset('assets')); ?>/images/icons/label.png" alt="image">
                              </div>
                              <div class="twm-content">
                                  <h3 class="twm-title">Deals For Every Budget</h3>
                                  <p>Incredible prices on every car, van, bike 
                                      and package worldwide Book vehicles at 
                                      incredible prices worldwide
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-xl-4 col-lg-4 col-md-4 m-b30">
                          <div class="twm-icon-style-left large-set in-dark-area">
                              <div class="twm-media">
                                  <img src="<?php echo e(asset('assets')); ?>/images/icons/customer-support.png" alt="image">
                              </div>
                              <div class="twm-content">
                                  <h3 class="twm-title">24/7 Road Assistance</h3>
                                  <p>
                                      We are ready to assist you and provide 
                                      reliable support. Who Will keep you moving 
                                      forward with confidence and mental peace.
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-xl-4 col-lg-4 col-md-4 m-b30">
                          <div class="twm-icon-style-left large-set in-dark-area">
                              <div class="twm-media">
                                  <img src="<?php echo e(asset('assets')); ?>/images/icons/parking-area.png" alt="image">
                              </div>
                              <div class="twm-content">
                                  <h3 class="twm-title">Free Pick-Up & Drop-Off</h3>
                                  <p>
                                      Enjoy free pickup and drop-off services,
                                      which adds an extra layer of ease to your 
                                      car rental experience.
                                  </p>
                              </div>
                          </div>
                      </div>

                  </div>

              </div>

            </div>
            </div>
            <!--LET'S YOUR ADVENTURE SECTION END--> 

            <!--OUR VEHICLE FLEET SECTION START -->
            <div class="section-full p-t150 p-b120 site-bg-white twm-blog-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
                <div class="container-fluid">

                   
                    <!-- TITLE START-->
                    <div class="section-head center ">
                        <div class="twm-sm-title left">Choose your car</div>
                        <h2 class="twm-large-title site-text-dark">Our Vehicle Fleet</h2>
                    </div>
                    <!-- TITLE END-->
                    

                    <div class="section-content">
                        <div class="owl-carousel twm-vehicle-fleet-carousel m-b30">
                            
                            <!--One block-->
                            <div class="item">
                                <div class="twm-vehicle-fleet-bx">
                                    <div class="twm-media">
                                        <div class="twm-media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/vehicle-2/pic1.jpg" alt="image">
                                        </div>
                                        <div class="twm-price-section">
                                            <div class="v-price">NRS48,00,000</div>
                                            
                                            <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                                        </div>
                                    </div>
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title"><a href="cars-detail.html">Jeep Renegade</a></h3>
                                        <ul class="twm-vehicle-facility">
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car-seat.png" alt="Image"></span>4 Seat</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/bag.png" alt="Image"></span>4 Bags</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car.png" alt="Image"></span>4 Suv</li>
                                        </ul>
                                        <ul class="twm-vehicle-fuel-type">
                                            <li>Petrol</li>
                                            <li><del>Diesel</del></li>
                                            <li><del>Electric</del></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Two block-->
                            <div class="item">
                                <div class="twm-vehicle-fleet-bx">
                                    <div class="twm-media">
                                        <div class="twm-media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/vehicle-2/pic2.jpg" alt="image">
                                        </div>
                                        <div class="twm-price-section">
                                            <div class="v-price">$700</div>
                                            
                                            <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                                        </div>
                                    </div>
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title"><a href="cars-detail.html">Ferarri Enzo</a></h3>
                                        <ul class="twm-vehicle-facility">
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car-seat.png" alt="Image"></span>4 Seat</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/bag.png" alt="Image"></span>4 Bags</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car.png" alt="Image"></span>4 Suv</li>
                                        </ul>
                                        <ul class="twm-vehicle-fuel-type">
                                            <li>Petrol</li>
                                            <li><del>Diesel</del></li>
                                            <li><del>Electric</del></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Three block-->
                            <div class="item">
                                <div class="twm-vehicle-fleet-bx">
                                    <div class="twm-media">
                                        <div class="twm-media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/vehicle-2/pic3.jpg" alt="image">
                                        </div>
                                        <div class="twm-price-section">
                                            <div class="v-price">$900</div>
                                            
                                            <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                                        </div>
                                    </div>
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title"><a href="cars-detail.html">Mini Cooper</a></h3>
                                        <ul class="twm-vehicle-facility">
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car-seat.png" alt="Image"></span>4 Seat</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/bag.png" alt="Image"></span>4 Bags</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car.png" alt="Image"></span>4 Suv</li>
                                        </ul>
                                        <ul class="twm-vehicle-fuel-type">
                                            <li>Petrol</li>
                                            <li><del>Diesel</del></li>
                                            <li><del>Electric</del></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Four block-->
                            <div class="item">
                                <div class="twm-vehicle-fleet-bx">
                                    <div class="twm-media">
                                        <div class="twm-media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/vehicle-2/pic4.jpg" alt="image">
                                        </div>
                                        <div class="twm-price-section">
                                            <div class="v-price">$500</div>
                                            
                                            <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                                        </div>
                                    </div>
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title"><a href="cars-detail.html">Rolls Royce Cullinan</a></h3>
                                        <ul class="twm-vehicle-facility">
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car-seat.png" alt="Image"></span>4 Seat</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/bag.png" alt="Image"></span>4 Bags</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car.png" alt="Image"></span>4 Suv</li>
                                        </ul>
                                        <ul class="twm-vehicle-fuel-type">
                                            <li>Petrol</li>
                                            <li><del>Diesel</del></li>
                                            <li><del>Electric</del></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Five block-->
                            <div class="item">
                                <div class="twm-vehicle-fleet-bx">
                                    <div class="twm-media">
                                        <div class="twm-media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/vehicle-2/pic5.jpg" alt="image">
                                        </div>
                                        <div class="twm-price-section">
                                            <div class="v-price">NRS48,00,000</div>
                                            
                                            <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                                        </div>
                                    </div>
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title"><a href="cars-detail.html">Porsche 911</a></h3>
                                        <ul class="twm-vehicle-facility">
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car-seat.png" alt="Image"></span>4 Seat</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/bag.png" alt="Image"></span>4 Bags</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car.png" alt="Image"></span>4 Suv</li>
                                        </ul>
                                        <ul class="twm-vehicle-fuel-type">
                                            <li>Petrol</li>
                                            <li><del>Diesel</del></li>
                                            <li><del>Electric</del></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Six block-->
                            <div class="item">
                                <div class="twm-vehicle-fleet-bx">
                                    <div class="twm-media">
                                        <div class="twm-media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/vehicle-2/pic6.jpg" alt="image">
                                        </div>
                                        <div class="twm-price-section">
                                            <div class="v-price">NRS48,00,000</div>
                                            
                                            <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                                        </div>
                                    </div>
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title"><a href="cars-detail.html">Chevrolet Coupe</a></h3>
                                        <ul class="twm-vehicle-facility">
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car-seat.png" alt="Image"></span>4 Seat</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/bag.png" alt="Image"></span>4 Bags</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car.png" alt="Image"></span>4 Suv</li>
                                        </ul>
                                        <ul class="twm-vehicle-fuel-type">
                                            <li>Petrol</li>
                                            <li><del>Diesel</del></li>
                                            <li><del>Electric</del></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Seven block-->
                            <div class="item">
                                <div class="twm-vehicle-fleet-bx">
                                    <div class="twm-media">
                                        <div class="twm-media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/vehicle-2/pic7.jpg" alt="image">
                                        </div>
                                        <div class="twm-price-section">
                                            <div class="v-price">NRS48,00,000</div>
                                            
                                            <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                                        </div>
                                    </div>
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title"><a href="cars-detail.html">Ford White SUV</a></h3>
                                        <ul class="twm-vehicle-facility">
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car-seat.png" alt="Image"></span>4 Seat</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/bag.png" alt="Image"></span>4 Bags</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car.png" alt="Image"></span>4 Suv</li>
                                        </ul>
                                        <ul class="twm-vehicle-fuel-type">
                                            <li>Petrol</li>
                                            <li><del>Diesel</del></li>
                                            <li><del>Electric</del></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Eight block-->
                            <div class="item">
                                <div class="twm-vehicle-fleet-bx">
                                    <div class="twm-media">
                                        <div class="twm-media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/vehicle-2/pic8.jpg" alt="image">
                                        </div>
                                        <div class="twm-price-section">
                                            <div class="v-price">NRS48,00,000</div>
                                            
                                            <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                                        </div>
                                    </div>
                                    <div class="twm-vehicle-fleet-content">
                                        <h3 class="twm-v-title"><a href="cars-detail.html">Toyota Crew Cab</a></h3>
                                        <ul class="twm-vehicle-facility">
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car-seat.png" alt="Image"></span>4 Seat</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/bag.png" alt="Image"></span>4 Bags</li>
                                            <li><span><img src="<?php echo e(asset('assets')); ?>/images/icons/car.png" alt="Image"></span>4 Suv</li>
                                        </ul>
                                        <ul class="twm-vehicle-fuel-type">
                                            <li>Petrol</li>
                                            <li><del>Diesel</del></li>
                                            <li><del>Electric</del></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!--OUR VEHICLE FLEET SECTION END-->

            <!--WHY CHOOSE US SECTION START-->
            <div class="section-full site-bg-white twm-w-chooseus-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
                <div class="container">
                    <div class="row twm-w-chooseus-section">
                        <div class="col-lg-5 col-md-12">
                            <!-- TITLE START-->
                            <div class="section-head left ">
                                <div class="twm-sm-title left">Our Features</div>
                                <h2 class="twm-large-title site-text-dark">Why Choose Us?</h2>
                                <div class="section-head-detail">
                                    Discover a world of convenience, safety, and customization, paving the way for unforgettable adventures and seamless mobility solutions.
                                </div>
                            </div>
                            <!-- TITLE END-->

                            <div class="twm-list-icon-style1">
                                <ul>
                                    <li>
                                        <div class="twm-list-icon-style-bx">
                                            <div class="twm-icon-bx">
                                                <span>
                                                    <img src="<?php echo e(asset('assets')); ?>/images/w-choose-icon/icon-1.png" alt="image">
                                                </span>
                                            </div>
                                            <div class="twm-icon-bx-detail">
                                                <h3 class="twm-title">Deals For Every Budget</h3>
                                                <p>Incredible prices on every car, van, bike and package 
                                                    worldwide Book vehicles at incredible.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-list-icon-style-bx">
                                            <div class="twm-icon-bx">
                                                <span>
                                                    <img src="<?php echo e(asset('assets')); ?>/images/w-choose-icon/icon-2.png" alt="image">
                                                </span>
                                            </div>
                                            <div class="twm-icon-bx-detail">
                                                <h3 class="twm-title">Flexible Pricing</h3>
                                                <p>customization, paving the way for unforgettable
                                                    adventures seamless mobility solutions.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-list-icon-style-bx">
                                            <div class="twm-icon-bx">
                                                <span>
                                                    <img src="<?php echo e(asset('assets')); ?>/images/w-choose-icon/icon-3.png" alt="image">
                                                </span>
                                            </div>
                                            <div class="twm-icon-bx-detail">
                                                <h3 class="twm-title">Quality At Minimum Expense</h3>
                                                <p>customization, paving the way for unforgettable
                                                    adventures seamless mobility solutions.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twm-list-icon-style-bx">
                                            <div class="twm-icon-bx">
                                                <span>
                                                    <img src="<?php echo e(asset('assets')); ?>/images/w-choose-icon/icon-4.png" alt="image">
                                                </span>
                                            </div>
                                            <div class="twm-icon-bx-detail">
                                                <h3 class="twm-title">Free Pick-Up & Drop-Off</h3>
                                                <p>Enjoy free pickup and drop-off services, adding an
                                                    extra layer of ease to your car rental experience.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="twm-w-chooseus-media">
                                <div class="twm-media">
                                    <img src="<?php echo e(asset('assets')); ?>/images/need-h-pic.png" alt="Image">
                                </div>
                                <div class="twm-need-help-bx">
                                    <div class="twm-need-help-content">
                                        <span>Need any help ?</span>
                                        <h3 class="twm-title">+977-9851101428</h3>
                                    </div>
                                    <div class="twm-need-help-icon">
                                        <img src="<?php echo e(asset('assets')); ?>/images/24-clock.png" alt="icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--WHY CHOOSE US SECTION END-->

            <!--CATEGORIES SECTION START -->
            <div class="section-full p-t150 site-bg-white twm-categories-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <!-- TITLE START-->
                            <div class="section-head left ">
                                <div class="twm-sm-title left">Categories</div>
                                <h2 class="twm-large-title site-text-dark">A Look At All Types Of Vehicles</h2>
                            </div>
                            <!-- TITLE END-->
                        </div>
                    </div>

                    <div class="section-content">
                        <div class="owl-carousel twm-categories-carousel next-prev-top-right">
                            
                            <!--One block-->
                            <div class="item">
                                <div class="twm-categories-type">
                                    <div class="twm-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/vehicle/pic13.jpg" alt="Image">
                                        <div class="twm-media-link">
                                            <a href="cars-detail.html" class="twm-media-link-content">SUV</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <!--Two block-->
                            <div class="item">
                                <div class="twm-categories-type">
                                    <div class="twm-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/vehicle/pic8.jpg" alt="Image">
                                        <div class="twm-media-link">
                                            <a href="cars-detail.html" class="twm-media-link-content">Sedan</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <!--Three block-->
                            <div class="item">
                                <div class="twm-categories-type">
                                    <div class="twm-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/vehicle/pic14.jpg" alt="Image">
                                        <div class="twm-media-link">
                                            <a href="cars-detail.html" class="twm-media-link-content">Harley Davidson</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <!--Four block-->
                            <div class="item">
                                <div class="twm-categories-type">
                                    <div class="twm-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/vehicle/pic6.jpg" alt="Image">
                                        <div class="twm-media-link">
                                            <a href="cars-detail.html" class="twm-media-link-content">Hatchback</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <!--Five block-->
                            <div class="item">
                                <div class="twm-categories-type">
                                    <div class="twm-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/vehicle/pic3.jpg" alt="Image">
                                        <div class="twm-media-link">
                                            <a href="cars-detail.html" class="twm-media-link-content">Coupe</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <!--Six block-->
                            <div class="item">
                                <div class="twm-categories-type">
                                    <div class="twm-media">
                                        <img src="<?php echo e(asset('assets')); ?>/images/vehicle/pic5.jpg" alt="Image">
                                        <div class="twm-media-link">
                                            <a href="cars-detail.html" class="twm-media-link-content">Hybrid</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!--CATEGORIES SECTION END -->

            <!--WORKING STEPS SECTION START-->
            <div class="section-full p-t150 site-bg-white twm-w-steps-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2" style="background-image: (<?php echo e(asset('assets')); ?>/images/step-bg.jpg);">
                <div class="container">

                    
                    <!-- TITLE START-->url
                    <div class="section-head center ">
                        <div class="twm-sm-title left">How it Work</div>
                        <h2 class="twm-large-title site-text-dark">Following Working Steps</h2>
                    </div>
                    <!-- TITLE END-->
                     

                    <div class="section-content">
                        <div class="row twm-w-steps-section">
                            
                            <div class="col-lg-3 col-md-6 m-b30">
                                <div class="twm-w-steps">
                                    <div class="twm-w-step-count">
                                        <span>01</span>
                                    </div>
                                    <div class="twm-w-step-detail">
                                        <h3 class="twm-title">Choose A Car</h3>
                                        <p>Check out our range of cars and choose the car of your choice </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 m-b30">
                                <div class="twm-w-steps">
                                    <div class="twm-w-step-count">
                                        <span>02</span>
                                    </div>
                                    <div class="twm-w-step-detail">
                                        <h3 class="twm-title">Pick Up Date</h3>
                                        <p>Check out our range of cars and choose the car of your choice </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 m-b30">
                                <div class="twm-w-steps">
                                    <div class="twm-w-step-count">
                                        <span>03</span>
                                    </div>
                                    <div class="twm-w-step-detail">
                                        <h3 class="twm-title">Confirm Your Booking</h3>
                                        <p>Check out our range of cars and choose the car of your choice </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 m-b30">
                                <div class="twm-w-steps">
                                    <div class="twm-w-step-count">
                                        <span>04</span>
                                    </div>
                                    <div class="twm-w-step-detail">
                                        <h3 class="twm-title">Enjoy Driving</h3>
                                        <p>Check out our range of cars and choose the car of your choice </p>
                                    </div>
                                </div>
                            </div>
                            

                        </div>

                        <div class="twm-adv-show">
                            <img src="<?php echo e(asset('assets')); ?>/images/adv-car.png" alt="Image">
                        </div>

                    </div>

                </div>
            </div>
            <!--WORKING STEPS SECTION END-->

            <!--TESTIMONIAL SECTION START-->
            <div class="section-full p-t150 site-bg-white twm-testimonial-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <!-- TITLE START-->
                            <div class="section-head left ">
                                <div class="twm-sm-title left">Testimonial</div>
                                <h2 class="twm-large-title site-text-dark">What Our Customers Say</h2>
                            </div>
                            <!-- TITLE END-->
                        </div>
                    </div>

                    <div class="section-content">
                        <div class="owl-carousel twm-blog-carousel next-prev-top-right">
                            
                            <!--One block-->
                            <div class="item">
                                <div class="twm-testimonial2">
                                    <div class="twm-testimonial-head">
                                        <div class="media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/testimonial/pic1.jpg" alt="Image">
                                        </div>
                                        <div class="twm-author-detail">
                                            <h3 class="twm-title">Kevin Martin</h3>
                                            <div class="twm-position">Customer</div>
                                        </div>
                                    </div>
                                    
                                    <div class="twm-testimonial-detail">
                                        <p>I Was Very Impresed Lorem posuere in miss and drana 
                                            en the nisan semere sceriun amiss etiam ornare in 
                                            the miss drana is lorem fermen mauris.
                                        </p>
                                        <div class="twm-rating-wrap">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div> 
                                    </div>
                                        
                                    <div class="twm-quote-icon">
                                        <img src="<?php echo e(asset('assets')); ?>/images/quote.png" alt="#">
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Two block-->
                            <div class="item">
                                <div class="twm-testimonial2">
                                    <div class="twm-testimonial-head">
                                        <div class="media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/testimonial/pic2.jpg" alt="Image">
                                        </div>
                                        <div class="twm-author-detail">
                                            <h3 class="twm-title">Devid Cullen</h3>
                                            <div class="twm-position">Customer</div>
                                        </div>
                                    </div>
                                    
                                    <div class="twm-testimonial-detail">
                                        <p>I Was Very Impresed Lorem posuere in miss and drana 
                                            en the nisan semere sceriun amiss etiam ornare in 
                                            the miss drana is lorem fermen mauris.
                                        </p>
                                        <div class="twm-rating-wrap">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div> 
                                    </div>
                                        
                                    <div class="twm-quote-icon">
                                        <img src="<?php echo e(asset('assets')); ?>/images/quote.png" alt="#">
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Three block-->
                            <div class="item">
                                <div class="twm-testimonial2">
                                    <div class="twm-testimonial-head">
                                        <div class="media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/testimonial/pic3.jpg" alt="Image">
                                        </div>
                                        <div class="twm-author-detail">
                                            <h3 class="twm-title">Piter Has</h3>
                                            <div class="twm-position">Customer</div>
                                        </div>
                                    </div>
                                    
                                    <div class="twm-testimonial-detail">
                                        <p>I Was Very Impresed Lorem posuere in miss and drana 
                                            en the nisan semere sceriun amiss etiam ornare in 
                                            the miss drana is lorem fermen mauris.
                                        </p>
                                        <div class="twm-rating-wrap">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div> 
                                    </div>
                                        
                                    <div class="twm-quote-icon">
                                        <img src="<?php echo e(asset('assets')); ?>/images/quote.png" alt="#">
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Four block-->
                            <div class="item">
                                <div class="twm-testimonial2">
                                    <div class="twm-testimonial-head">
                                        <div class="media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/testimonial/pic1.jpg" alt="Image">
                                        </div>
                                        <div class="twm-author-detail">
                                            <h3 class="twm-title">Kevin Martin</h3>
                                            <div class="twm-position">Customer</div>
                                        </div>
                                    </div>
                                    
                                    <div class="twm-testimonial-detail">
                                        <p>I Was Very Impresed Lorem posuere in miss and drana 
                                            en the nisan semere sceriun amiss etiam ornare in 
                                            the miss drana is lorem fermen mauris.
                                        </p>
                                        <div class="twm-rating-wrap">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div> 
                                    </div>
                                        
                                    <div class="twm-quote-icon">
                                        <img src="<?php echo e(asset('assets')); ?>/images/quote.png" alt="#">
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Five block-->
                            <div class="item">
                                <div class="twm-testimonial2">
                                    <div class="twm-testimonial-head">
                                        <div class="media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/testimonial/pic2.jpg" alt="Image">
                                        </div>
                                        <div class="twm-author-detail">
                                            <h3 class="twm-title">Devid Cullen</h3>
                                            <div class="twm-position">Customer</div>
                                        </div>
                                    </div>
                                    
                                    <div class="twm-testimonial-detail">
                                        <p>I Was Very Impresed Lorem posuere in miss and drana 
                                            en the nisan semere sceriun amiss etiam ornare in 
                                            the miss drana is lorem fermen mauris.
                                        </p>
                                        <div class="twm-rating-wrap">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div> 
                                    </div>
                                        
                                    <div class="twm-quote-icon">
                                        <img src="<?php echo e(asset('assets')); ?>/images/quote.png" alt="#">
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Six block-->
                            <div class="item">
                                <div class="twm-testimonial2">
                                    <div class="twm-testimonial-head">
                                        <div class="media-pic">
                                            <img src="<?php echo e(asset('assets')); ?>/images/testimonial/pic3.jpg" alt="Image">
                                        </div>
                                        <div class="twm-author-detail">
                                            <h3 class="twm-title">Piter Has</h3>
                                            <div class="twm-position">Customer</div>
                                        </div>
                                    </div>
                                    
                                    <div class="twm-testimonial-detail">
                                        <p>I Was Very Impresed Lorem posuere in miss and drana 
                                            en the nisan semere sceriun amiss etiam ornare in 
                                            the miss drana is lorem fermen mauris.
                                        </p>
                                        <div class="twm-rating-wrap">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div> 
                                    </div>
                                        
                                    <div class="twm-quote-icon">
                                        <img src="<?php echo e(asset('assets')); ?>/images/quote.png" alt="#">
                                    </div>
                                    
                                </div> 
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!--TESTIMONIAL SECTION END-->
            
            <!--OUR BLOG SECTION START-->
            <div class="section-full p-t150 p-b120 site-bg-white twm-blog-section-wrap wow fadeInDown" data-wow-offset="100" data-wow-delay="0.2">
                <div class="container-fluid">

                   
                    <!-- TITLE START-->
                    <div class="section-head center ">
                        <div class="twm-sm-title left">From the Blog</div>
                        <h2 class="twm-large-title site-text-dark">Car And Bike Rental News</h2>
                    </div>
                    <!-- TITLE END-->
                    

                    <div class="section-content">
                        <div class="owl-carousel twm-blog-carousel m-b30">
                            
                            <!--One block-->
                            <div class="item">
                                <div class="twm-lt-blog">
                                    <div class="wt-post-media">
                                        <a href="blog-detail.html"><img src="<?php echo e(asset('assets')); ?>/images/blog/latest/bg1.jpg" alt=""></a>
                                    </div>
                                    <div class="twm-post-info-wrap">
                                        <div class="post-date-wrap">
                                            <div class="post-date">
                                                <span class="date">14</span>
                                                <span class="month">June</span>
                                            </div>
                                        </div>                                  
                                        <div class="twm-post-info">
                                            
                                            <div class="post-author">
                                                <a class="au-name" href="blog-detail.html">by Mike Hardson</a>
                                            </div>
                                            
                                            <h3 class="post-title">
                                                <a href="blog-detail.html">Your Perfect Memorial Day Weekend Getaway with Carntel</a>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Two block-->
                            <div class="item">
                                <div class="twm-lt-blog">
                                    <div class="wt-post-media">
                                        <a href="blog-detail.html"><img src="<?php echo e(asset('assets')); ?>/images/blog/latest/bg2.jpg" alt=""></a>
                                    </div>
                                    <div class="twm-post-info-wrap">
                                        <div class="post-date-wrap">
                                            <div class="post-date">
                                                <span class="date">18</span>
                                                <span class="month">July</span>
                                            </div>
                                        </div>                                  
                                        <div class="twm-post-info">
                                            
                                            <div class="post-author">
                                                <a class="au-name" href="blog-detail.html">by Devid Culun</a>
                                            </div>
                                            
                                            <h3 class="post-title">
                                                <a href="blog-detail.html">The Ultimate Checklist for a Successful Car Rental Adventure</a>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Three block-->
                            <div class="item">
                                <div class="twm-lt-blog">
                                    <div class="wt-post-media">
                                        <a href="blog-detail.html"><img src="<?php echo e(asset('assets')); ?>/images/blog/latest/bg3.jpg" alt=""></a>
                                    </div>
                                    <div class="twm-post-info-wrap">
                                        <div class="post-date-wrap">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <span class="month">Sep</span>
                                            </div>
                                        </div>                                  
                                        <div class="twm-post-info">
                                            
                                            <div class="post-author">
                                                <a class="au-name" href="blog-detail.html">by Kevin Smith</a>
                                            </div>
                                            
                                            <h3 class="post-title">
                                                <a href="blog-detail.html">Tips for Renting the Perfect Car for Your Family Vacation</a>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Four block-->
                            <div class="item">
                                <div class="twm-lt-blog">
                                    <div class="wt-post-media">
                                        <a href="blog-detail.html"><img src="<?php echo e(asset('assets')); ?>/images/blog/latest/bg4.jpg" alt=""></a>
                                    </div>
                                    <div class="twm-post-info-wrap">
                                        <div class="post-date-wrap">
                                            <div class="post-date">
                                                <span class="date">14</span>
                                                <span class="month">June</span>
                                            </div>
                                        </div>                                  
                                        <div class="twm-post-info">
                                            
                                            <div class="post-author">
                                                <a class="au-name" href="blog-detail.html">by Mike Hardson</a>
                                            </div>
                                            
                                            <h3 class="post-title">
                                                <a href="blog-detail.html">Your Perfect Memorial Day Weekend Getaway with Carntel</a>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Five block-->
                            <div class="item">
                                <div class="twm-lt-blog">
                                    <div class="wt-post-media">
                                        <a href="blog-detail.html"><img src="<?php echo e(asset('assets')); ?>/images/blog/latest/bg5.jpg" alt=""></a>
                                    </div>
                                    <div class="twm-post-info-wrap">
                                        <div class="post-date-wrap">
                                            <div class="post-date">
                                                <span class="date">18</span>
                                                <span class="month">July</span>
                                            </div>
                                        </div>                                  
                                        <div class="twm-post-info">
                                            
                                            <div class="post-author">
                                                <a class="au-name" href="blog-detail.html">by Devid Culun</a>
                                            </div>
                                            
                                            <h3 class="post-title">
                                                <a href="blog-detail.html">The Ultimate Checklist for a Successful Car Rental Adventure</a>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                </div> 
                            </div>

                            <!--Six block-->
                            <div class="item">
                                <div class="twm-lt-blog">
                                    <div class="wt-post-media">
                                        <a href="blog-detail.html"><img src="<?php echo e(asset('assets')); ?>/images/blog/latest/bg6.jpg" alt=""></a>
                                    </div>
                                    <div class="twm-post-info-wrap">
                                        <div class="post-date-wrap">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <span class="month">Sep</span>
                                            </div>
                                        </div>                                  
                                        <div class="twm-post-info">
                                            
                                            <div class="post-author">
                                                <a class="au-name" href="blog-detail.html">by Kevin Smith</a>
                                            </div>
                                            
                                            <h3 class="post-title">
                                                <a href="blog-detail.html">Tips for Renting the Perfect Car for Your Family Vacation</a>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                </div> 
                            </div>
                            

                        </div>

                    </div>

                </div>
            </div>
            <!--OUR BLOG SECTION END-->

     
        </div>

        <!-- CONTENT END -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\western_motors\resources\views/front/home.blade.php ENDPATH**/ ?>