<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $visible = ['id_spesialis','no_token','nama_pasien','alamat', 'email',' jenis_kelamin', 'umur',
                            'penyakit','detail_perawatan', 'status'];
    protected $fillable = ['id_spesialis','no_token','nama_pasien','alamat', 'email',' jenis_kelamin', 'umur',
                            'penyakit','detail_perawatan', 'status'];
    public $timestamps = true;

    public function spesialis() {
        return $this->belongsTo('App\Models\Spesialis', 'id_spesialis');
    }

}
