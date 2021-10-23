<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $table = 'chat';
    protected $fillable = ['user_id','penerima_id','text','is_seen'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
