<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mystery_box extends Model
{
 protected $table = 'mystery_box';
 
 protected $fillable = [
   'id_box',
   'immagine',
   'nome',
   'descrizione',
   'prezzo',
 ];

 public $timestamps = false;

}
