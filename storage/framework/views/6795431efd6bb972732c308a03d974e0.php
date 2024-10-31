
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    <main class="contenedor">
       
        <div class="contenedor-formulario">
            <h2>Login</h2>
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
            
            <input type="email" name="email" placeholder="Email: " required >
            <input type="password" name="password" placeholder="Contraseña:">
             <div class="opciones-login">
                <label >
                    <input type="checkbox" name="remember">
                    Recordarme
                </label>

                <?php if(Route::has('password.request')): ?>               
                <a href="<?php echo e(route('password.request')); ?>">¿Olvidaste tu contraseña?</a>
                <?php endif; ?>
             </div>

            <input class="btn" type="submit" value="Iniciar sesion">

            </form>
            <span> ¿No tienes una cuenta ? <a href="">Regisrate</a></span>
        </div>

        <div class="contenedor-poster">
            <h1>Bienvenido!</h1>
            <p>Unete a nosotros</p>
        </div>

    </main>
</body>
</html><?php /**PATH C:\Users\usuario\Music\Pintegrador-main\resources\views/auth/login.blade.php ENDPATH**/ ?>