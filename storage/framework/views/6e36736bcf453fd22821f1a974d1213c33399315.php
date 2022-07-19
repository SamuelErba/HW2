<html>
    <head>
        <link rel='stylesheet' href="<?php echo e(url('css/login.css')); ?>">
        <script src='login.js' defer></script>
    </head>
    <body>
    <header>
            <nav>
                <div id="logo">
                    <img src="<?php echo e(url('images/logo.png')); ?>">
                </div>
                <div id="links">
                <a href="<?php echo e(url ('register')); ?>">Registrati</a>
                </div>
            </nav>
    </header>
        <?php if($error == 'empty_fileds'): ?>
        <section class='error'>Compilare tutti i campi.</section>
        <?php elseif($error == 'wrong'): ?>
        <section class='error'>Credenziali non valide.</section>
        <?php endif; ?>
        <section>
        <main id='setlogin'>
                <form name='form' method='post'>
                    <?php echo csrf_field(); ?>
                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>

                    <p><label>&nbsp;<input type='submit'></label></p>
                </form>
            </main>
            </section> 
            
    </body>
</html><?php /**PATH C:\xampp\htdocs\HW2\resources\views/login.blade.php ENDPATH**/ ?>