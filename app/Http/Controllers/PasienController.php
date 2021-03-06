<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::with('spesialis')->get();
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

    public function edit($id)
    {
        // $pasien = Pasien::findOrFail($id);
        // return view('dokter.entry', compact('pasien'));

        // mengambil data pegawai berdasarkan id yang dipilih
        $pasien = DB::table('pasiens')->where('id',$id)->get();
        // passing data pasien yang didapat ke view edit.blade.php
        return view('dokter.entry',['pasien' => $pasien]);
    }

    public function update(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'detail_perawatan' => 'required',
        ]);

        $pasien = Pasien::findOrFail($request->id);
        $pasien->detail_perawatan = $request->detail_perawatan;
        $pasien->status = 'sudah di proses';
        $pasien->save();
        return redirect('/dokter/daftar-pasien');
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

    public function dokter() {
        $dokter = Dokter::with('spesialis')->get();
        $dokter = Dokter::with('user')->get();
        return view('pasien.dokter', compact('dokter'));
    }
}
