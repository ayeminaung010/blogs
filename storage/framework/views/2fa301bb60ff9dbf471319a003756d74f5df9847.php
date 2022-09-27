<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row mt-5">
            <div class="col-5 ">
                <div class=" p-2">
                    <?php if(session('insertSuccess')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo e(session('insertSuccess')); ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if(session('updateSuccess')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo e(session('updateSuccess')); ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    

                    <form action="<?php echo e(route('post#create')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="text-group mb-1">
                            <label for="">Post Title(ခေါင်းစဉ်)</label>
                            <input type="text" name="postTitle" id="" class="form-control <?php $__errorArgs = ['postTitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter post title" value="<?php echo e(old('postTitle')); ?>">
                            <?php $__errorArgs = ['postTitle'];
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
                            <label for="">Post Description(စာပိုဒ်)</label>
                            <textarea name="postDescription" id="" cols="30" rows="10" class="form-control  <?php $__errorArgs = ['postDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter post description" ><?php echo e(old('postDescription')); ?></textarea>
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
                            <input type="file" name="postImage" id="" class="form-control <?php $__errorArgs = ['postImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="<?php echo e(old('postImage')); ?>">
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
                        </div>

                        <div class="text-group mb-1">

                                <label for="">Location</label>
                                <select class="form-select  <?php $__errorArgs = ['postLocation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  id="validationCustom04" name="postLocation" >
                                    <option selected disabled value="<?php echo e(old('postLocation')); ?>">Choose city</option>
                                    <option value="yangon">yangon</option>
                                    <option value="mandalay">mandalay</option>
                                    <option value="pyay">pyay</option>
                                    <option value="bago">bago</option>
                                    <option value="pyin oo lwin">pyin oo lwin</option>
                                    <option value="taung gyi">taung gyi</option>
                                    <option value="inn lay">inn lay</option>
                                    <option value="mawlamyine">mawlamyine</option>
                                </select>
                            <?php $__errorArgs = ['postLocation'];
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
                            <label for="">Price</label>
                            <input type="text" name="postPrice" id="" class="form-control <?php $__errorArgs = ['postPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter price" value="<?php echo e(old('postPrice')); ?>">
                            <?php $__errorArgs = ['postPrice'];
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
                            <label for="">Rating</label>
                            <input type="number" name="postRating" id="" class="form-control <?php $__errorArgs = ['postRating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Rating eg-1,2,3,4,5..." min="0" max="5" value="<?php echo e(old('postRating')); ?>">
                            <?php $__errorArgs = ['postRating'];
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
                        
                        <div class=" mb-1">
                            <input type="submit" value="Create" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-7 ">

                <h3 class="pb-3">
                    <form action="<?php echo e(route('post#createPage')); ?>" method="GET">
                        <div class="row">

                            <div class="col-5">Total- <span class="fw-bold"><?php echo e($posts->total()); ?></span></div>
                            <div class="col-5 offset-2">
                                <div class="row">
                                    <input type="text" name="searchKey" value="<?php echo e(request('searchKey')); ?>" class="form-control col" placeholder="Search..." id="">
                                    <button type="submit" class="btn btn-outline-primary col-2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </h3>
                <div class="data-container">
                    <?php if(count($posts) != 0): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="post p-3 shadow-sm ">
                            <div class="d-flex justify-content-between">
                                <h5><?php echo e($items['title']); ?></h5>
                                <div class="text-muted"><?php echo e($items['created_at']->diffForHumans()); ?></div>
                            </div>

                            <p class="text-muted"><?php echo e(Str::words($items['description'],10, '...See more')); ?></p>
                            <span>
                                <i class="fa-solid fa-money-bills text-success"></i> <small><?php echo e($items->price); ?> Kyats</small> |
                                <i class="fa-solid fa-location-dot text-danger"></i> <small><?php echo e($items->address); ?></small> | <i class="fa-solid fa-star text-warning"></i> <small><?php echo e($items->rating); ?></small>
                            </span>
                            <div class="text-end">
                                

                                <a href="<?php echo e(route('post#delete',$items['id'])); ?>" class=" text-decoration-none">
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> အမှိက်ပုံး</button>
                                </a>
                                <a href="<?php echo e(route('post#updatePage',$items['id'])); ?>" class=" text-decoration-none">
                                    <button class="btn btn-primary">အပြည့်စုံဖတ်ရန်...</i></button>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <h5 class="mt-5 text-danger text-center">There is no Data...</h5>
                    <?php endif; ?>
                </div>
                <div class=" my-3">
                    <?php echo e($posts->appends(request()->query())->links()); ?>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/todolist/resources/views/create.blade.php ENDPATH**/ ?>