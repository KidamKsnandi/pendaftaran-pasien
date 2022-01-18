<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $visible = ['id_spesialis','id_user','nama_dokter','shift', 'foto'];
    protected $fillable = ['id_spesialis','id_user','nama_dokter','shift', 'foto'];
    public $timestamps = true;

    public function spesialis() {
        return $this->belongsTo('App\Models\Spesialis', 'id_spesialis');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

     public function image()
    {
        if ($this->foto && file_exists(public_path('images/dokter/' . $this->foto))) {
            return asset('images/dokter/' . $this->foto);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/dokter/' . $this->foto))) {
            return unlink(public_path('images/dokter/' . $this->foto));
        }

    }
}
