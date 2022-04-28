<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Role;
use App\Models\Spesialis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DokterController extends Controller
{
    public function pasien()
    {
        $pasien = Pasien::with('spesialis')->get();
        return view('dokter.pasien', compact('pasien'));
    }

    public function index()
    {
        $dokter = Dokter::all();
        return view('admin.dokter.index', compact('dokter'));
    }

    public function create()
    {
        $spesialis = Spesialis::all();
        $dokter = Dokter::all();
        return view('admin.dokter.create', compact('dokter', 'spesialis'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_dokter' => 'required',
        //     'id_spesialis' => 'required',
        //     'foto' => 'required|image|max:2048',
        //     'shift' => 'required',
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|max:255',
        //     'password' => 'required|min:8',
        // ]);

        $user = new User();
        $user->name = $request->nama_dokter;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $dokterRole = Role::where('name', 'dokter')->first();
        $user->attachRole($dokterRole);

        $dokter = new Dokter();
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->id_spesialis = $request->id_spesialis;
        $dokter->shift = $request->shift;
        $dokter->id_user = $user->id;
        // upload image / foto
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/dokter/', $name);
            $dokter->foto = $name;
        }
        $dokter->save();
        return redirect('administrator/data-dokter');
    }

    public function destroy(Dokter $dokter, $id)
    {
        $dokte = Dokter::findOrFail($id);
        $dokte->delete();
        $user = User::find($dokter->user_id);
        $user->delete();
        return redirect('administrator/data-dokter');
    }
}
