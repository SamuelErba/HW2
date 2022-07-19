<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
 protected $table = 'clienti';
 
 protected $fillable = [
   'id',
   'nome',
   'cognome',
   'codice_fiscale',
   'username',
   'password',
 ];

 protected $hidden = ['
    password',
 ];

 public $timestamps = false;

}
