<?php $__env->startSection('title', 'Mostrar Préstamos'); ?>
<?php $__env->startSection('content'); ?>
<?php if($prestamo->isEmpty()): ?>
    <p>No hay prestamos</p>
<?php else: ?>
<style>
table {
   width: 70%;
   border: 1px solid #000;
   border-collapse: collapse;
   text-align: center;
}
th, td {
   width: 25%;
   text-align: center;
   vertical-align: top;
   border: 1px solid #000;
   border-spacing: 0;
   border-collapse: collapse;
   padding: 0;
}


</style>

            <table >
                <thead >
                    <tr >
                        <th >Id Usuario</th>
                        <th >Id Libro</th>
                        <th >Fecha de Préstamo</th>
                        <th >Fecha de Devolución</th>

                    </tr>
                </thead>
                <?php echo $__env->renderEach('tablaPrestamo',$prestamo , 'item'); ?>
            </table>
        </div>
    </div>
  </div>
</div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biblioteca\resources\views/mostrarPrestamos.blade.php ENDPATH**/ ?>