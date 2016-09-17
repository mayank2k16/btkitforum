<?php $__env->startSection('content'); ?>

<form action="addpost" method="post" enctype='multipart/form-data'>
    
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    
Body::<input type="text" name="content"><br><br>
    
<input type="file" name="image">
    
    <input type="submit" value="add">

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>