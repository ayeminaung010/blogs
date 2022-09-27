<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3 mt-5">
            <div class=" my-3">
                <a href="<?php echo e(route('post#updatePage',$post['id'])); ?>" class="text-decoration-none">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Back</span>
                </a>
            </div>
            <form action="<?php echo e(route('post#update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label for="title">Post title(ခေါင်းစဉ်)</label>
                <input type="hidden" name="postId" value="<?php echo e($post['id']); ?>">
                <div class="my-2">
                    <input type="text" class="form-control <?php $__errorArgs = ['postTitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="postTitle" placeholder="Enter post title.."" value="<?php echo e($post['title'],old('postTitle')); ?>">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <label for="">Image</label>
                <div class="">
                        <?php if($post['image'] == null ): ?>
                        <img src=" <?php echo e(asset('/storage/'.'404image.jpg')); ?>" class=" img-thumbnail shadow-sm" alt="" style="width: 100%">
                        <?php else: ?>
                            <img src="<?php echo e(asset('/storage/'.$post['image'])); ?>" class=" img-thumbnail shadow-sm"  alt="" style="width: 100%">
                        <?php endif; ?>
                </div>
                <input type="file" name="postImage" id="" class="form-control my-1 <?php $__errorArgs = ['postImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__errorArgs = ['postImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="my-2">
                    <label for="description">Post Description(စာပိုဒ်)</label>
                    <textarea name="postDescription" id="" cols="30" rows="10" class="form-control  <?php $__errorArgs = ['postDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter post description" > <?php echo e($post['description'],old('postDescription')); ?></textarea>
                    <?php $__errorArgs = ['postDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                
                <div class="text-group mb-1">
                    <label for="">Post Image</label>
                    <input type="file" name="updateImage" id="" class="form-control <?php $__errorArgs = ['updateImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="<?php echo e(old('updateImage')); ?>">
                    <?php $__errorArgs = ['updateImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="text-group mb-3">
                        <label for="">Location</label>
                        <select class="form-select " id="validationCustom04" name="updateLocation" >
                            <option selected disabled ><?php echo e($post['address'],old('updateLocation')); ?></option>
                            <option value="yangon">yangon</option>
                            <option value="mandalay">mandalay</option>
                            <option value="pyay">pyay</option>
                            <option value="bago">bago</option>
                            <option value="pyin oo lwin">pyin oo lwin</option>
                            <option value="taung gyi">taung gyi</option>
                            <option value="inn lay">inn lay</option>
                            <option value="mawlamyine">mawlamyine</option>
                        </select>
                    <?php $__errorArgs = ['updateLocation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="text-group mb-3">
                    <label for="">Price</label>
                    <input type="text" name="updatePrice" id="" class="form-control <?php $__errorArgs = ['updatePrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter price" value="<?php echo e($post['price'],old('updatePrice')); ?>">
                    <?php $__errorArgs = ['updatePrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <div class="text-group mb-3">
                    <label for="">Rating</label>
                    <input type="text" name="updateRating" id="" class="form-control <?php $__errorArgs = ['updateRating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Rating eg-1,2,3,4,5..." value="<?php echo e($post['rating'],old('updateRating')); ?>">
                    <?php $__errorArgs = ['updateRating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <input type="submit" value="Update" class="btn btn-success float-end">
            </form>


        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/todolist/resources/views/edit.blade.php ENDPATH**/ ?>