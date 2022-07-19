<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;
use App\Models\Mystery_box;
use App\Models\Carrello;

class ShopController extends BaseController
{
    public function do_shop()
    {
        if (!Session::get('user_id'))
        {
            return redirect ('login');
        }
        $boxs = DB::table('mystery_box')->get();
        return $boxs;
    }
    public function show_shop()
    {
        return view ('shop');
    }
}
?>