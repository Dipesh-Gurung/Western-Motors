
<?php $__env->startSection('content'); ?>
<!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
             <div class="wt-bnr-inr site-bg-dark  twm-primary-overlay-wrap" style="background-image: url(images/banner/banner-2.jpg);">
                <div class="twm-primary-overlay"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="wt-title">Blog Grid 2</h2>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <!-- INNER PAGE BANNER END -->   

            <!-- Blog SECTION START -->
            <div class="section-full p-t150 p-b150 site-bg-white twm-blog-grid-2-section-wrap">
                <div class="container">
                    <div class="section-content">
                        <!-- TITLE START-->
                        <div class="section-head center">
                            <div class="twm-sm-title left">From the Blog</div>
                            <h2 class="twm-large-title site-text-dark">Car And Bike Rental News</h2>
                        </div>
                        <!-- TITLE END-->
                        <div class="masonry-wrap row">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('blog-grid', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1713800557-0', $__slots ?? [], get_defined_vars());

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
                                    <li class="prev"><a href="blog-grid.html"><span> <i class="fa-solid fa-chevron-left"></i> </span></a></li>
                                    <li><a href="blog-grid.html">1</a></li>
                                    <li class="active"><a href="blog-grid.html">2</a></li>
                                    <li><a href="blog-grid.html">3</a></li>
                                    <li class="next"><a href="blog-grid.html"><span> <i class="fa-solid fa-chevron-right"></i> </span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>   
            <!-- Blog Study SECTION END -->


        </div>
        <!-- CONTENT END -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\western_motors\resources\views/front/blog.blade.php ENDPATH**/ ?>