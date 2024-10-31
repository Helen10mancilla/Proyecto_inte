<?php $__env->startSection('contenido'); ?>
<div class= "container-formulario">
<div class="card formulario">
    <h2>Crear Nuevo Producto</h2>
    <form action="<?php echo e(route('producto.store')); ?>" enctype="multipart/form-data" method="POST">
        
        <?php echo csrf_field(); ?>
        <!-- Campo Nombre -->
        <div class="form-group">
            <label for="nombre">Nombre de la Producto</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <!-- Campo Descripción -->
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4"></textarea>
        </div>
        
        <!-- Campo Precio -->
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" required>
        </div>
         <!-- Campo Precio Venta -->
         <div class="form-group">
            <label for="precio_venta">Precio de Venta</label>
            <input type="number" id="precio_venta" name="precio_venta" required>
        </div>
         <!-- Campo Stock-->
         <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" required>
        </div>
        <!-- Campo imagen -->
        <div class="form-group">
            <label for="imagen">Imagen</label>
           <input type="file" id="imagen" name= "imagen">
        </div>
        <!-- Campo Categoria -->
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name='id_categoria'id="id_categoria"required>
                <option value="" disabled selected>categoria:</option>
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option value=<?php echo e($cat->id); ?>> <?php echo e($cat->nombre); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
        </div>
        <!-- Botón Guardar -->
        <div class="form-group">
            <button type="submit">Guardar Producto</button>
        </div>
    </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\usuario\Music\Pintegrador-main\resources\views/producto/create.blade.php ENDPATH**/ ?>