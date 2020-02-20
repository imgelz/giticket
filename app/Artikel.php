<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'foto', 'konten','slug'];
    public $timestamps = true;
}
