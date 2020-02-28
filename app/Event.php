<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['nama_event', 'spanduk', 'tanggal_mulai', 'tanggal_selesai', 'waktu_mulai', 'waktu_selesai', 'format_waktu', 'lokasi', 'deskripsi', 'syarat', 'id_kategori', 'id_user', 'slug'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
