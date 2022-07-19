<html>
<head>
    <meta charset="utf-8">
    <script> const BASE_URL = "{{ url ('/') }}/"</script>
    <link rel="stylesheet" href="{{ url ('css/carrello.css')}}">
    <script src="{{ url ('js/carrello.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <header>
    <nav>
                <div id="logo">
                    <img src="{{ url('images/logo.png') }}">
                </div>
                <div id="links">
                <a href="{{ url ('home.php') }}">Home</a>
                <a href="{{ url ('shop.php') }}">Shop</a>
                <a href="{{ url ('ricetta.php') }}">Ricettario</a>
                <a href="{{ url ('carrello.php') }}">Carrello</a>
                <a href="{{ url ('logout.php') }}">Esci</a>
                </div>
            </nav>
    </header>

    <article>
      <section>
            <div class="negozio">
            <div class="newdiv"></div>
            </div>
            
        </section> 

      

    </article>
</html>