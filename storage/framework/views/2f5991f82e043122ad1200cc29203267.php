<tbody>

    <tr >
        <td ><?php echo e($item->user_id); ?></td>
        <td ><?php echo e($item->book_id); ?></td>
        <td ><?php echo e($item->fecha_prestamo); ?></td>
        <td ><?php echo e($item->Fecha_devolucion); ?></td>


        <td >
            <div style= "display:flex">
            <a href="http://biblioteca.test/deletePrestamo/<?php echo e($item->id); ?>"><button style="background-color: red; color:white">Borrar</button></a>
            <a href="http://biblioteca.test/updatePrestamoForm/<?php echo e($item->id); ?>"><button style="background-color: green; color:white">Modificar</button></a>
        </div>
        </td>

    </tr>

</tbody>
<?php /**PATH C:\laragon\www\biblioteca\resources\views/tablaPrestamo.blade.php ENDPATH**/ ?>