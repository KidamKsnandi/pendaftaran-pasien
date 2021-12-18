<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        foreach($pasiens as $pasien) {
            $pasien;
        }
        return view('pasien.index', compact('pasien'));
    }

    public function create()
    {
        $spesialis = Spesialis::all();
        return view('pasien.create', compact('spesialis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'id_spesialis' => 'required',
            'penyakit' => 'required'
        ]);

        $pasien = new Pasien();
        $time = date('ymd');
        $random = mt_rand(1000,9999);
        $pasien->no_token = $time.$random;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->alamat = $request->alamat;
        $pasien->email = $request->email;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->umur = $request->umur;
        $pasien->id_spesialis = $request->id_spesialis;
        $pasien->penyakit = $request->penyakit;
        $pasien->detail_perawatan = '';
        $pasien->status = '';
        $pasien->save();
        return redirect()->route('pasien.index');
    }

    public function token(Request $request) {

        error_reporting(error_reporting() & ~E_NOTICE);
        $request->validate([
            'no_token' => 'required',
        ]);

        $pasien = new Pasien();
        $pasien->no_token = $request->no_token;
        $tokens = Pasien::where('no_token', $pasien->no_token)->get();
        foreach ($tokens as $token) {
            $token;
        }
        if($pasien->no_token == $pasien->no_token) {
            return view('pasien.token', compact('token'));
        } else {
            return view('pasien.token');
        }

    }
}
