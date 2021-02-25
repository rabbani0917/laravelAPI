<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table='kategori_berita';

    protected $fillable=[
        'nama','users_id'
    ];

    public function Beritas(){
        return $this->hasMany('\App\models\Berita::class', 'kategori_berita_id', 'id');
    }

    public function user(){
        return $this->belongsTo('\App\models\user::class','user_id','id');
    }
}