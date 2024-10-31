<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/estilos-tablas.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/estilos-formularios.css')); ?>">
</head>
<body>
  <!-- slidebar   -->
   <aside class="slidebar" id="slidebar">
    <h2>Mi tienda</h2>
    <!-- PERFIL -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn profile">
         <span><img src="<?php echo e(asset('img/face2.jpg')); ?>" alt="avatar"></span>
         <p><?php echo e(Auth::user()->name); ?></p>
        </div>
        <div class="element-slidebar-content">
            <a href="<?php echo e(route('profile.edit')); ?>">Perfil</a>
            
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
               <input type="submit" value="Salir" class="logout-link">

             </form>

        </div>
    </div>
    <!-- Productos -->
    
    <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img  src="<?php echo e(asset('img/rokrt.png')); ?>" alt="Product"></span>
         <p>Productos</p>
        </div>
        <div class="element-slidebar-content">
            <a href="<?php echo e(route('producto.index')); ?>">Todos</a>
            <a href="<?php echo e(route('producto.create')); ?>">Agregar</a>

        </div>
    </div>
      <!-- Categorias -->
    
      <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img  src="<?php echo e(asset('img/icono1.png')); ?>" alt="Product"></span>
         <p>Categorias</p>
        </div>
        <div class="element-slidebar-content">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('categoria.index')): ?>
            <a href="<?php echo e(route('categoria.index')); ?>">Todos</a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('categoria.create')): ?>
            <a href="<?php echo e(route('categoria.create')); ?>">Agregar</a>
            <?php endif; ?>
        </div>
    </div>
    <!-- Provedores -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img  src="<?php echo e(asset('img/provedores.png')); ?>" alt="Provedor"></span>
         <p>Provedores</p>
        </div>
        <div class="element-slidebar-content">
            <a href="">Todos</a>
            <a href="">Agregar</a>

        </div>
    </div>
    <!-- Compras -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img  src="<?php echo e(asset('img/compras.png')); ?>" alt="Product"></span>
         <p>Compras</p>
        </div>
        <div class="element-slidebar-content">
            <a href="">Todos</a>
            <a href="">Agregar</a>

        </div>
    </div>
        <!-- Ventas -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
             <span><img  src="<?php echo e(asset('img/ventas.png')); ?>" alt="ventas"></span>
             <p>Ventas</p>
            </div>
            <div class="element-slidebar-content">
                <a href="">Todos</a>
                <a href="">Agregar</a>
    
            </div>
        </div>
    </div>
   </aside>

   <!-- main -->
   <main class="main">
    <!-- header -->
    <header class="header">
        <h2>Dasboard</h2>
        <button id="menu-toggle" class="menu-hamburger">☰</button>
    </header>
    
      
      <?php echo $__env->yieldContent('contenido'); ?>

   </main>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\usuario\Music\Pintegrador-main\resources\views/layouts/plantilla.blade.php ENDPATH**/ ?>