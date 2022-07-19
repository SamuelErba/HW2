<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class RicettarioController extends BaseController
{
    public function do_ricetta()
    {
        /*if (!Session::get('user_id'))
        {
            return redirect ('login');
        }
        */
        return view ('ricetta');
    }

    public function curl($ricerca)
    {
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, "https://www.themealdb.com/api/json/v1/1/search.php?s=".$ricerca);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }
    
}
?>