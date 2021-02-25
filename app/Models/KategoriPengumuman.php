<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    use HasFactory;

    protected $table='kategori_pengumuman';

    protected $fillable=[
        'nama','users_id'
    ];

    public function Beritass(){
        return $this->hasMany('\App\models\Pengumuman::class', 'kategori_pengmumuman_id', 'id');
    }

    public function user(){
        return $this->belongsTo('\App\models\user::class','user_id','id');
    }
}