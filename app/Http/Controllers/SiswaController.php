<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = \App\Models\SiswaModel::all();
        return view('siswa.index',compact('data'));
    }

    public function tambah()
    {
        return view('siswa.tambah');
    }

    public function post(Request $request)
    {
        $siswa = new \App\Models\SiswaModel;
        $siswa->nis = $request->get('nis_nama');
        $siswa->nama = $request->get('nama');
        $siswa->jenis_kelamin = $request->get('jenis_kelamin');
        $siswa->alamat = $request->get('alamat');
        $siswa->no_hp = $request->get('no_hp');
        $siswa->nama_ortu = $request->get('nama_ortu');
        $siswa->asal_sekolah = $request->get('asal_sekolah');
        $siswa->save();
        return redirect()->route('tampil.siswa');
    }
    public function edit($id)
    {
        $siswa = \App\Models\SiswaModel::where('id',$id)->first();
        return view('siswa.edit',compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = \App\Models\SiswaModel::where('id',$id)->first();
        $siswa->nis = $request->get('nis_nama');
        $siswa->nama = $request->get('nama');
        $siswa->jenis_kelamin = $request->get('jenis_kelamin');
        $siswa->alamat = $request->get('alamat');
        $siswa->no_hp = $request->get('no_hp');
        $siswa->nama_ortu = $request->get('nama_ortu');
        $siswa->asal_sekolah = $request->get('asal_sekolah');
        $siswa->update();
        return redirect()->route('tampil.siswa');
    }
    public function delete($id){
        \App\Models\SiswaModel::where('id',$id)->delete();
        return redirect()->route('tampil.siswa');
    }
}
