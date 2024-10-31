<?php $__env->startSection('contenido'); ?>
    
<section class="container-tabla">
   <h2 class="titulo-tabla"> Listado de productos</h2>
   <table >
       <thead>
           <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Imagen</th>
               <th>Categoría</th>
               <th>Precio</th>
               <th>Precio de venta</th>
               <th>Stock</th>
               <th>Opciones</th>
           </tr>
       </thead>
       <tbody class ="tabla-productos">
         <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>                
             <td><?php echo e($producto->id); ?></td>
             <td><?php echo e($producto->nombre); ?></td>
             <td >
               <img src="<?php echo e(asset('img/'.$producto->imagen)); ?>"  alt="<?php echo e($producto->imagen); ?>">

             </td>
             <td> 
               <?php if($producto->categoria): ?>
               <?php echo e($producto->categoria->nombre); ?>

               <?php else: ?>
               Sin categoría
               <?php endif; ?>
             </td>
             <td><?php echo e($producto->precio); ?></td>
             <td><?php echo e($producto->precio_venta); ?></td>
             <td><?php echo e($producto->stock); ?></td>
             <td >
              <a href="<?php echo e(route('producto.show',[$producto->id])); ?>">
                 <img src="img/view.png" alt="">
              </a>
              <a href="<?php echo e(route('producto.edit',[$producto->id])); ?>">
                 <img src="img/edit.png" alt="">
              </a>
              <a href="<?php echo e(route('producto.destroy',[$producto->id])); ?>">
                 
              </a>
              <form action="<?php echo e(route('producto.destroy',$producto->id)); ?>" method="POST" onsubmit="return confimarEliminacion()">

                 
                 <?php echo csrf_field(); ?>
                 
                 <?php echo method_field('DELETE'); ?>
                 <input type="image"src="img/delete.png"></input>

              </form>
              <script>
                 function confimarEliminacion() {
                     return confirm('¿Seguro deseas eliminar?'); // Muestra el mensaje de confirmación
                 }
             </script>
             </td>                                
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
          
       </tbody>
   </table>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\usuario\Music\Pintegrador-main\resources\views/producto/index.blade.php ENDPATH**/ ?>