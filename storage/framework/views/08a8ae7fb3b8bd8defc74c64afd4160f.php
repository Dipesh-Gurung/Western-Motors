<div class="row">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6 m-b30 wow fadeInDown" data-wow-delay="0.2">
        <div class="twm-vehicle-fleet-bx twm-custom-grid-3">
            <div class="twm-media">
                <div class="twm-media-pic">
                    <img src="<?php echo e(asset('assets/images/' . $vehicle['image'])); ?>" alt="image">
                </div>
                <div class="twm-price-section">
                    <div class="v-price"><?php echo e($vehicle['price']); ?></div>
                    <div class="v-duration">/ Day</div>
                    <a href="cars-detail.html" class="v-detail"><em>Detail</em></a>
                </div>
            </div>
            <div class="twm-vehicle-fleet-content">
                <h3 class="twm-v-title"><a href="cars-detail.html"><?php echo e($vehicle['name']); ?></a></h3>
                <ul class="twm-vehicle-facility">
                    <li><span><img src="<?php echo e(asset('assets/images/icons/car-seat.png')); ?>" alt="Image"></span><?php echo e($vehicle['seats']); ?> Seat</li>
                    <li><span><img src="<?php echo e(asset('assets/images/icons/bag.png')); ?>" alt="Image"></span><?php echo e($vehicle['bags']); ?> Bags</li>
                    <li><span><img src="<?php echo e(asset('assets/images/icons/car.png')); ?>" alt="Image"></span><?php echo e($vehicle['type']); ?></li>
                </ul>
                <ul class="twm-vehicle-fuel-type">
                    <li>Petrol</li>
                    <li><del>Diesel</del></li>
                    <li><del>Electric</del></li>
                </ul>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\xampp\htdocs\laravel\western_motors\resources\views/livewire/vehicle-grid.blade.php ENDPATH**/ ?>