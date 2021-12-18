<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    use HasFactory;

    protected $visible = ['nama_spesialis','akomodasi'];
    protected $fillable = ['nama_spesialis','akomodasi'];
    public $timestamps = true;

    public function pasien() {
        return $this->hasMany('App/Models/Pasien','id_spesialis');
    }

    public function dokter() {
        $this->hasMany('App/Models/Dokter','id_spesialis');
    }
}
