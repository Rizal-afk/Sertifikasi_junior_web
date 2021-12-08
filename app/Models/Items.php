<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    public $fillable = [
        'nama_barang',
        'kategori',
        'merek',
        'deskripsi',
        'media',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
