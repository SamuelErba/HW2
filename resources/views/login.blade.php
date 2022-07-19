<html>
    <head>
        <link rel='stylesheet' href="{{ url('css/login.css') }}">
        <script src='login.js' defer></script>
    </head>
    <body>
    <header>
            <nav>
                <div id="logo">
                    <img src="{{ url('images/logo.png') }}">
                </div>
                <div id="links">
                <a href="{{url ('register')}}">Registrati</a>
                </div>
            </nav>
    </header>
        @if($error == 'empty_fileds')
        <section class='error'>Compilare tutti i campi.</section>
        @elseif($error == 'wrong')
        <section class='error'>Credenziali non valide.</section>
        @endif
        <section>
        <main id='setlogin'>
                <form name='form' method='post'>
                    @csrf
                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>

                    <p><label>&nbsp;<input type='submit'></label></p>
                </form>
            </main>
            </section> 
            
    </body>
</html>