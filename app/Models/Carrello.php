<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrello extends Model
{
 protected $table = 'carrello';
 
 protected $fillable = [
   'id_box',
   'id_vendita',
   'ordinato_da',

 ];

 public $timestamps = false;

}
