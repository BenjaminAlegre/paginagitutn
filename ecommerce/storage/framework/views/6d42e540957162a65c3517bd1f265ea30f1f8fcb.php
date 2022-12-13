<?php $__env->startSection('contenido'); ?>

<?php if(isset($errors) && $errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('tecnicos.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre"
               <?php if(isset($tecnico)): ?> value="<?php echo e($tecnico->nombre); ?>" <?php endif; ?>
            <?php if(empty($errors->get('nombre'))): ?>
               <?php if(!is_null(old('nombre'))): ?> value="<?php echo e(old('nombre')); ?>" <?php endif; ?>
            <?php else: ?>
                class="form-control is-invalid"
            <?php endif; ?>
        >
    </div>

    <div>
        <label>Apellido</label>
        <input type="text" name="apellido" <?php if(isset($tecnico)): ?> value="<?php echo e($tecnico->apellido); ?>" <?php endif; ?> <?php if(!is_null(old('apellido'))): ?> value="<?php echo e(old('apellido')); ?>" <?php endif; ?>>
    </div>

    <div>
        <label>Legajo</label>
        <input type="number" name="legajo" <?php if(isset($tecnico)): ?> value="<?php echo e($tecnico->legajo); ?>" <?php endif; ?> <?php if(!is_null(old('legajo'))): ?> value="<?php echo e(old('legajo')); ?>" <?php endif; ?>>
    </div>

    <div>
        <label>¿Está ocupado?</label>
        <input type="" name="">
    </div>

    <div>
        <button type="submit">Guardar cambios</button>
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp-7.4.19\htdocs\example-app\resources\views/tecnicos/tecnico.blade.php ENDPATH**/ ?>