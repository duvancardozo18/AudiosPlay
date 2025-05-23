<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;
    protected $fillable = ['user_id' , 'status'];
    public function usuarios(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
