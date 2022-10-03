

<?php $__env->startSection('container'); ?>
        <h1 class="mb-5"><?php echo e($post->title); ?></h1>

        <p>By. <a href="#" class="text-decoration-none"><?php echo e($post->user->name); ?></a> in <a href="/categories/<?php echo e($post->category->slug); ?>" class="text-decoration-none"><?php echo e($post->category->name); ?></a></p>
        
            <?php echo $post->body; ?>

        
    <a href="/blog" class="d-block mt-3">Back to posts</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\application\coba-laravel\resources\views/post.blade.php ENDPATH**/ ?>