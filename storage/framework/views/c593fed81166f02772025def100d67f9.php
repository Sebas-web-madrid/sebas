<?php $__env->startSection('title', 'Editando Préstamo'); ?>
<?php $__env->startSection('content'); ?>
<style>
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=number], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=bool], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 30%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
   </style>
<div style= "display:flex wrap:none">
<form action="<?php echo e(route('updatePrestamo')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="">Id_Usuario</label>
    <input type="number" name="user_id" value ="<?php echo e($prestamo->user_id); ?>">
    <label for="">Id_Libro</label>
    <input type="number" name="book_id" value = "<?php echo e($prestamo->book_id); ?>">
    <label for="">Fecha de Préstamo</label>
    <input type="date" name="fecha_prestamo" value = "<?php echo e($prestamo->fecha_prestamo); ?>">
    <label for="">Fecha de devolución</label>
    <input type="date" name="fecha_devolucion" value = "<?php echo e($prestamo->fecha_devolucion); ?>">

    <input type="submit" value= 'enviar datos'>
</form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biblioteca\resources\views/mostrarDatosPrestamoForm.blade.php ENDPATH**/ ?>