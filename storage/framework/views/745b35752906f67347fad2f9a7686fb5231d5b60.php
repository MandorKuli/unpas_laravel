


<?php $__env->startSection('container'); ?>
<h1 class="mb-4">Post Categories</h1>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul>
            <li>
                <a href="/categories/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a></h2>
            </li>
        </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\application\coba-laravel\resources\views/categories.blade.php ENDPATH**/ ?>