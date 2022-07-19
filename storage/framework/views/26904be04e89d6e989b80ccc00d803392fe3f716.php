<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(url ('css/home.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <header>
    <nav>
                <div id="logo">
                    <img src="<?php echo e(url('images/logo.png')); ?>">
                </div>
                <div id="links">
                <a href="<?php echo e(url ('home')); ?>">Home</a>
                <a href="<?php echo e(url ('shop')); ?>">Shop</a>
                <a href="<?php echo e(url ('ricetta')); ?>">Ricettario</a>
                <a href="<?php echo e(url ('carrello')); ?>">Carrello</a>
                <a href="<?php echo e(url ('logout')); ?>">Esci</a>
                </div>
            </nav>
    </header>
    <section>
        <div id="opzioni">
            <div>
                <img src="<?php echo e(url ('images/ricettario.png')); ?>" >
                <h1>Ricettario</h1>
                <a class="button" href="<?php echo e(url ('ricetta')); ?>">Visita</a>
                <p><em>Cerca la tua ricetta</em></p>
            </div>
            <div>
                <img src="<?php echo e(url ('images//prova.png')); ?>" >
                <h1>Shop</h1>
                <a class="button" href="<?php echo e(url ('shop')); ?>">Visita</a>
                <p><em>Scopri i nostri box</em></p>
            </div>
        </div>
    </section>
    </body>
</html><?php /**PATH C:\xampp\htdocs\HW2\resources\views/home.blade.php ENDPATH**/ ?>