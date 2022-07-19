<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class HomeController extends BaseController
{
    public function home()
    {
        /*if (!Session::get('user_id'))
        {
            return redirect ('login');
        }
        */
        return view ('home');
    }
    
}
?>