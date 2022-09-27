<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-5">
                <div class=" my-3">
                    <a href="<?php echo e(route('post#home')); ?>" class="text-decoration-none">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back</span>
                    </a>
                </div>

                <h4><?php echo e($post['title']); ?></h4>
                <div class="d-flex">
                    <span class="btn btn-primary bg-dark m-2"><i class="fa-solid fa-money-bills text-success"></i> <?php echo e($post['price']); ?> </span>
                    <span class="btn btn-primary bg-dark m-2"><i class="fa-solid fa-location-dot text-danger"></i>  <?php echo e($post['address']); ?> </span>
                    <span class="btn btn-primary bg-dark m-2"><i class="fa-solid fa-star text-warning"></i>  <?php echo e($post['rating']); ?> </span>
                    <span class="btn btn-primary bg-dark m-2"> <?php echo e($post['created_at']->format("d-M-y ")); ?> </span>
                    <span class="btn btn-primary bg-dark m-2">  <?php echo e($post['created_at']->format(" m:i:A")); ?> </span>
                </div>
                <div class="">

                    <?php if($post->image == null ): ?>
                        <img src=" <?php echo e(asset('/storage/'.'404image.jpg')); ?>" class=" img-thumbnail shadow-sm" alt="" style="width: 100%">
                    <?php else: ?>
                        <img src="<?php echo e(asset('/storage/'.$post['image'])); ?>" class=" img-thumbnail shadow-sm"  alt="" style="width: 100%">
                    <?php endif; ?>
                </div>
                <p class="my-3 text-dark"><?php echo e($post['description']); ?> </p>
                <p class=" text-muted"><?php echo e($post['created_at']->diffForHumans()); ?> </p>

            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-8">
                <a href="<?php echo e(route('post#editPage',$post['id'])); ?>">
                    <button class="btn btn-secondary"> <i class="fa-solid fa-pen-to-square"></i> Edit</button>
                </a>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/todolist/resources/views/update.blade.php ENDPATH**/ ?>