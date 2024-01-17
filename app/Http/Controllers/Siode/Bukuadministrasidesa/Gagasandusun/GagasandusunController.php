<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa\Gagasandusun;

use App\Http\Controllers\Controller;
use App\Models\Tabel\Gagasandusun\Gagasandusun;
use Illuminate\Http\Request;

class GagasandusunController extends Controller
{
    public function index()
    {
        $gagasandusun = Gagasandusun::paginate(10);
        return view('siode.bukuadministrasidesa.gagasandusun.index', compact('gagasandusun'));
    }
    public function create()
    {
        return view('siode.bukuadministrasidesa.gagasandusun.create');
    }
    public function gagasandusunstore(Request $request)
    {
        $gagasandusun = new Gagasandusun();
        // $gagasandusun->kode = $request->kode;
        $gagasandusun->rt = $request->rt;
        $gagasandusun->rw = $request->rw;
        $gagasandusun->gagasan = $request->gagasan;
        $gagasandusun->lokasi_kegiatan = $request->lokasi_kegiatan;
        $gagasandusun->perkiraanvolume = $request->perkiraanvolume;
        $gagasandusun->satuan = $request->satuan;
        $gagasandusun->user_id = \Auth::user()->id;
        $gagasandusun->save();
        return redirect()
            ->route('siode.buku.gagasan.index')
            ->with('success', 'Data berhasil disimpan !');
    }
    public function destroy(Gagasandusun $gagasandusun)
    {
        // Lakukan validasi atau pengecekan izin penghapusan jika diperlukan
        $gagasandusun->delete();

        return redirect()
            ->route('siode.buku.gagasan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
    public function lihat()
    {
        $gagasandusun = Gagasandusun::paginate(10);
        return view('siode.bukuadministrasidesa.gagasandusun.lihat', compact('gagasandusun'));
    }
}
