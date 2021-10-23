<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelangan extends Model
{
    use HasFactory;
    protected $table = 'lelangan';
    protected $fillable = ['judul','tgl_close','jam_close','gambar','deskripsi','is_active','user_id'];
    protected $dates = ['tgl_close','jam_close'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function bid()
    {
        return $this->hasMany('App\Models\Bid');
    }
    public function keranjang()
    {
        return $this->hasMany('App\Models\Keranjang');
    }
    public function history()
    {
        return $this->hasMany('App\Models\History');
    }

}
