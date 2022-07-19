<html>
    <head>
    <meta charset="utf-8">
    <script> const BASE_URL = "<?php echo e(url ('/')); ?>/"</script>
    <link rel="stylesheet" href="<?php echo e(url ('css/ricetta.css')); ?>">
    <script src="<?php echo e(url ('js/ricetta.js')); ?>" defer></script>
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
    <article>
    
      <section>
      <form name="form" id="form" method="get">
              <p><label><input type='text' name='ricerca' id="ricerca" placeholder="Ricerca..."></label></p>
            <p><label>&nbsp;<input type='submit'></label></p>
          </form>
          <div id="meal-view"></div>
        </section> 

      

    </article>
</html><?php /**PATH C:\xampp\htdocs\HW2\resources\views/ricetta.blade.php ENDPATH**/ ?>