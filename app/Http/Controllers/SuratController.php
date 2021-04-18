<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function index()
    {// mengambil data dari table pegawai
    $surat = DB::table('surat')->get();
 
    // mengirim data pegawai ke view index
    return view('index',['surat' => $surat]);
    }
    public function tambah()
    {
 
	// memanggil view tambah
	return view('tambah');
 
    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('surat')->insert([
		'nomor' => $request->nomor,
		'tanggal' => $request->tanggal,
		'judul' => $request->judul,
		// 'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/surat');
 
    }
    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$surat = DB::table('surat')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['surat' => $surat]);
 
    }
    public function update(Request $request)
    {
	// update data pegawai
	DB::table('surat')->where('id',$request->id)->update([
		'nomor' => $request->nomor,
		'tanggal' => $request->tanggal,
		'judul' => $request->judul
		// 'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/surat');
    }
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('surat')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/surat');

    
    }
}
