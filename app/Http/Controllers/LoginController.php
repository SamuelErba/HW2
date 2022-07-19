<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class LoginController extends BaseController
{
    public function login_form()
    {
        if (Session::get('user_id'))
        {
            return redirect ('home');
        }

        $error = Session::get('error');
        Session::forget('error');
        return view ('login')-> with('error',$error);
    }
    
    public function do_login()
    {
        if (Session::get('user_id'))
        {
            return redirect ('home');
        }
        // controllo che i campi non siamo vuoti
        if(strlen(request('username')) == 0 || strlen(request('password')) == 0)
        {
            //se sono vuoti reindirizzo alla pagina di login e in più inserisco i dati che sono stati precedentemente inseriti
            Session::put('error','empty_fields');
            return redirect ('login') -> withInput();
        }
        //controllo credenziali
        $user = User::where('username', request('username'))->first();
        //login non andato a buon fine
        if(!$user || !password_verify(request('password'),$user->password))
        {
            Session::put('error','wrong');
            return redirect('login')->withInpunt();
        }
        // Login
        Session::put('user_id', $user -> id);
        //redirect home
        return redirect ('home');
    }
    public function register_form()
    {
        if (Session::get('user_id'))
        {
            return redirect ('home');
        }

        $error = Session::get('error');
        Session::forget('error');
        return view ('register')-> with('error',$error);
    }
    
    public function do_register()
    {
        if (Session::get('user_id'))
        {
            return redirect ('home');
        }
        // controllo che i campi non siamo vuoti
        if(strlen(request('username')) == 0 || strlen(request('password')) == 0)
        {
            //se sono vuoti reindirizzo alla pagina di registrazione e in più inserisco i dati che sono stati precedentemente inseriti
            Session::put('error','empty_fields');
            return redirect ('register') -> withInput();
        }
        //controllo se esiste già l'username
        else if(User::where('username', request('username'))->first()){
            Session::put('error', 'bad_username');
           return redirect('register')->withInput();
        }
        //creazione utente
        $user = new User;
        $user -> nome = request ('nome');
        $user -> cognome = request ('cognome');
        $user -> codice_fiscale = request ('codice_fiscale');
        $user -> username = request ('username');
        $user -> password = password_hash(request ('password'),PASSWORD_BCRYPT);
        $user -> save();
        // Login
        Session::put('user_id', $user -> id);
        //redirect home
        return redirect ('home');
    }

    public function logout()
    {
        //Elimina dati di sessione
        Session::flush();
        return redirect('login');
    }
}
?>