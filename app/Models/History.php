<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'History';
    protected $fillable = ['judul','pemenang','telp_pemenang','user_id','nominal'];
    
    public function lelangan(){
        return $this->belongsTo(Lelangan::class);
    }
    public function bid(){
        return $this->belongsTo(Bid::class);
    }
}
