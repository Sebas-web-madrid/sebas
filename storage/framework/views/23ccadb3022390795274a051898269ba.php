<?php $__env->startSection('title', 'Mostrar Libros'); ?>
<?php $__env->startSection('content'); ?>
<?php if($libro->isEmpty()): ?>
    <p>No hay libros</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Año Pub</th>
                <th>Género</th>
                <th>Disponible</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <?php echo $__env->renderEach('tabla',$libro , 'item'); ?>
    </table>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biblioteca\resources\views//mostrarLibros.blade.php ENDPATH**/ ?>