
<?php $__env->startSection('errores'); ?>
    <p>Menu de Administradores</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('cuerpo'); ?>
<div class="row">
    <div class="col s4"></div>
    <div class="col" class="flow-text">
        <a href="<?= BASE_URL ?>tablaTareas" class="waves-effect waves-light btn-large">Tabla de tareas</a>
    </div>
    <div class="col" class="flow-text">
        <a href="<?= BASE_URL ?>insertarTarea" class="waves-effect waves-light btn-large">Agregar tarea</a>
    </div>
</div>
<div class="row">
    <div class="col s4"></div>
    <div class="col" class="flow-text">
        <a href="<?= BASE_URL ?>tablaUsuarios" class="waves-effect waves-light btn-large">Tabla Usuarios</a>
    </div>
    <div class="col" class="flow-text">
        <a href="<?= BASE_URL ?>insertarUsuario" class="waves-effect waves-light btn-large">Agregar Usuario</a>
    </div>
</div>

        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pie'); ?>
    <a href="<?= BASE_URL ?>" class="waves-effect waves-light btn-large">Cerrar Sesion</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\projectos\php\pratica_slim\view/menu_adm.blade.php ENDPATH**/ ?>