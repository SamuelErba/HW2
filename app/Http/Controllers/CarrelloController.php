<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;
use App\Models\Carrello;


class CarrelloController extends BaseController
{
    public function add_carrello($id)
    {
        //aggiungo dati al carrello
        $clienti = Session::get('user_id');

        $carrello = new Carrello;
        $carrello -> id_box = $id; 
        $carrello -> ordinato_da = $clienti;
        $carrello -> save();
    }

    public function update_carrello()
    {
        $clienti = Session::get('user_id');
        $result = DB::table('mystery_box')->join('carrello','mystery_box.id_box','carrello.id_box')->select ('mystery_box.id_box','mystery_box.immagine','mystery_box.nome','carrello.id_vendita')->where('carrello.ordinato_da','=',$clienti)->get();
        return $result;
    }

    public function delete_carello($id_vendita)
    {
        $result = DB::table('carrello')->where('id_vendita','=',$id_vendita)->delete();
    }
    public function show_carrello()
    {
        return view ('carrello');
    }
    
}
?>