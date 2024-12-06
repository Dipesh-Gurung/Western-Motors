<div class="row">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="masonry-item col-xl-4 col-lg-6 col-md-6 m-b30 wow fadeInDown" data-wow-delay="0.2">
            <div class="twm-blog-grid-2">
                <div class="wt-post-media">
                    <a href="<?php echo e($blog['link']); ?>"><img src="<?php echo e(asset($blog['image'])); ?>" alt=""></a>
                </div>
                <div class="twm-post-info-wrap">
                    <div class="post-date-wrap">
                        <div class="post-date">
                            <span class="date"><?php echo e($blog['date']); ?></span>
                            <span class="month"><?php echo e($blog['month']); ?></span>
                        </div>
                    </div>
                    <div class="twm-post-info">
                        <div class="post-author">
                            <a class="au-name" href="<?php echo e($blog['link']); ?>">by <?php echo e($blog['author']); ?></a>
                        </div>
                        <h3 class="post-title">
                            <a href="<?php echo e($blog['link']); ?>"><?php echo e($blog['title']); ?></a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\xampp\htdocs\laravel\western_motors\resources\views/livewire/blog-grid.blade.php ENDPATH**/ ?>