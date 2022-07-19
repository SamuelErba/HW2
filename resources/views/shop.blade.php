
<html>
    <head>
    <meta charset="utf-8">
    <script> const BASE_URL = "{{ url ('/') }}/"</script>
    <link rel="stylesheet" href="{{ url ('css/shop.css') }}">
    <script src="{{ url ('js/shop.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <header>
    <nav>
                <div id="logo">
                    <img src="{{ url('images/logo.png')}}">
                </div>
                <div id="links">
                <a href="{{ url ('home') }}">Home</a>
                <a href="{{ url ('shop') }}">Shop</a>
                <a href="{{ url ('ricetta') }}">Ricettario</a>
                <a href="{{ url ('carrello') }}">Carrello</a>
                <a href="{{ url ('logout') }}">Esci</a>
                </div>
            </nav>
    </header>
    <article>
      <section>
            <div class="negozio">
            </div>
        </section> 
    </article>
</html>
