<?php $__env->startSection('title', 'Respuesta Formulario añadir Préstamo'); ?>
<?php $__env->startSection('content'); ?>
    <?php if($id > 0): ?>
        <p>El Préstamo se ha añadido correctamente</p>
    <?php else: ?>
        <p>Ha ocurrido un error al insertar el Préstamo</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biblioteca\resources\views/addPrestamoOK_Formulario.blade.php ENDPATH**/ ?>