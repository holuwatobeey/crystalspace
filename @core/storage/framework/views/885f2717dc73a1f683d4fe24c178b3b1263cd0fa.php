<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('About')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('About')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="about-page-conent about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content-area">
                        <?php if(file_exists('assets/uploads/'.get_static_option('about_page_'.get_user_lang().'_about_section_left_image'))): ?>
                            <img  src="<?php echo e(asset('assets/uploads/'.get_static_option('about_page_'.get_user_lang().'_about_section_left_image'))); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area">
                        <h2 class="title"><?php echo e(get_static_option('about_page_'.get_user_lang().'_about_section_title')); ?></h2>
                        <p><?php echo e(get_static_option('about_page_'.get_user_lang().'_about_section_description')); ?></p>
                        <?php if(!empty(get_static_option('about_page_'.get_user_lang().'_about_section_btn_status'))): ?>
                        <div class="btn-wrapper">
                            <a href="<?php echo e(get_static_option('about_page_'.get_user_lang().'_about_section_btn_url')); ?>" class="boxed-btn"><?php echo e(get_static_option('about_page_'.get_user_lang().'_about_section_btn_text')); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counterup-area counterup-bg"
             <?php if(file_exists('assets/uploads/'.get_static_option('home_01_counterup_bg_image'))): ?>
             style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('home_01_counterup_bg_image'))); ?>)"
            <?php endif; ?>
    >
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $all_counterup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-counterup-item">
                            <div class="icon">
                                <i class="<?php echo e($data->icon); ?>"></i>
                            </div>
                            <div class="content">
                                <div class="count-num"><?php echo e($data->number); ?></div>
                                <h5 class="name"><?php echo e($data->title); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crystalspace\@core\resources\views/frontend/pages/about.blade.php ENDPATH**/ ?>