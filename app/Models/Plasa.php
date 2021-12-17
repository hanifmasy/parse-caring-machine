<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plasa extends Model
{
    protected $fillable = [
      'nama_plasa',
      'passwd_plasa',
      'witel_plasa',
    ];

    public function setPasswordAttribute($value){
      $this->attributes['passwd_plasa'] = bcrypt($value);
    }
}
