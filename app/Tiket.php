<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = ['nama_tiket', 'jumlah_tiket', 'harga', 'deskripsi', 'slug', 'id_event', 'id_user'];
    public $timestamps = true;

    public function event()
    {
        return $this->belongsTo('App\Event', 'id_event');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
