<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function pasien() {
        $pasien = Pasien::with('spesialis')->get();
        return view('dokter.pasien', compact('pasien'));

    }
}
