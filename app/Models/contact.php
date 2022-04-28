<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $visible = ['nama','email','no_kontak','pesan'];
    protected $fillable = ['nama','email','no_kontak','pesan'];
    public $timestamps = true;

}
