<?php $__env->startSection('contenido'); ?>
<h2><?php echo e($titulo); ?></h2>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('puede_crear_tecnicos')): ?>
    <div>
        <a href="<?php echo e(route('tecnicos.create')); ?>">Crear nuevo</a>
    </div>
<?php endif; ?>

<div>
<p><?php echo e($usuario->apellido); ?></p>
</div>

<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Legajo</th>
        <th>¿Está ocupado?</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $tecnicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tecnico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($tecnico->nombre); ?></td>
                <td><?php echo e($tecnico->apellido); ?></td>
                <td><?php echo e($tecnico->legajo); ?></td>
                <td>
                    <?php if($tecnico->estaOcupado): ?>
                        <label>Sí</label>
                    <?php else: ?>
                        <label>No</label>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('tecnicos.show', $tecnico->id)); ?>">Ver detalle</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido2'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp-7.4.19\htdocs\example-app\resources\views/tecnicos/tecnicos.blade.php ENDPATH**/ ?>