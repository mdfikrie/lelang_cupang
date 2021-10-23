<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $table = 'bid';
    protected $fillable = ['lelangan_id','nominal','user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
                                                    
    public function lelangan()
    {
        return $this->belongsTo('App\Models\Lelangan');
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
    public function history(){
        return $this->hasMany(History::class);
    }

    public function scopeBid($query, $x, $y){
        return $this->where('lelangan_id',$x)->where('nominal', $y)->exists();
    }
    

}
