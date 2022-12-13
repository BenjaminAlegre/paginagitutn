<?php $__env->startSection('contenido'); ?>

    <form method="POST" action="<?php echo e(route('login.store')); ?>">
        <?php echo csrf_field(); ?>
        <input class="form-control" type="text" name="usuario" placeholder="Nombre de usuario">
        <input class="form-control" type="password" name="contrasenia" placeholder="Contraseña">

        <button type="submit">Entrar!</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/login.blade.php ENDPATH**/ ?>