<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    use HasFactory;

    protected $table='kategori_galeri';

    protected $fillable=[
        'nama','users_id'
    ];

    public function Beritass(){
        return $this->hasMany('\App\models\Galeri::class', 'kategori_galeri_id', 'id');
    }

    public function user(){
        return $this->belongsTo('\App\models\user::class','user_id','id');
    }
}