<html>
    <head>
        <script src='signup.js' defer></script>
        <link rel='stylesheet' href= "{{ url('css/signup.css') }}">
    </head>
    <body>
    <header>
            <nav>
                <div id="logo">
                    <img src="{{ url('images/logo.png') }}">
                </div>
                <div id="links">
                <a href="{{url ('login')}}">Accedi</a>
                <a href="{{url ('register')}}">Registrati</a>
                </div>
            </nav>
    </header>
    @if($error == 'empty_fields')
    <section class='error'>Compilare tutti i campi.</section>
    @elseif($error == 'bad_username')
    <section class='error'>Nome utente già esistente</section> 
    @endif
        <section>
            <main id='setsign'>
                <form name='form' method='post'>
                    @csrf 
                    <p><label>Nome <input type='text' name='nome' ></label></p>
                    <p><label>Cognome <input type='text' name='cognome'></label></p>
                    <p><label>Codice Fiscale <input type='text' name='codice_fiscale'></label></p>
                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <p><label>&nbsp;<input type='submit'></label></p>
                </form>

            </main> 
        </section>
    </body>
</html>