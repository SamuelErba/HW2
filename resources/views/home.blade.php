<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ url ('css/home.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <header>
    <nav>
                <div id="logo">
                    <img src="{{ url('images/logo.png') }}">
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
    <section>
        <div id="opzioni">
            <div>
                <img src="{{ url ('images/ricettario.png') }}" >
                <h1>Ricettario</h1>
                <a class="button" href="{{ url ('ricetta') }}">Visita</a>
                <p><em>Cerca la tua ricetta</em></p>
            </div>
            <div>
                <img src="{{ url ('images//prova.png') }}" >
                <h1>Shop</h1>
                <a class="button" href="{{ url ('shop') }}">Visita</a>
                <p><em>Scopri i nostri box</em></p>
            </div>
        </div>
    </section>
    </body>
</html>