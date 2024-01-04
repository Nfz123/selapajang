<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\RtRw;
use App\Models\Tabel\KartuKeluarga;
use App\Models\Tabel\KartuKeluargaAnggota;

class HomeController extends Controller
{
    public function index()

        // return view('home.index');

    {
        $kk = KartuKeluargaAnggota::select('id', 'sts_hub_kel')
            ->whereSts_hub_kel(1)
            ->count();
        $pen = KartuKeluargaAnggota::select('id')->count();
        $jmlrw = KartuKeluarga::groupBy('rw')
       ->sum('rw');
        $rt = KartuKeluarga::select('id', 'rt')
            ->get()
            ->groupBy('rt');
        $rw = KartuKeluarga::select('id', 'rw')
            ->get()
            ->groupBy('rw');
        $kp = KartuKeluarga::select('id', 'kp')
            ->get()
            ->groupBy('kp');
        $kkanggotalaki = KartuKeluargaAnggota::select('jenkel')
            ->whereJenkel('1')
            ->count();
        $kkanggotaperempuan = KartuKeluargaAnggota::select('jenkel')
            ->whereJenkel('2')
            ->count();
        return view('home.index', compact('rt', 'rw', 'kk', 'pen','jmlrw', 'kkanggotalaki', 'kkanggotaperempuan'));
    }

    public function petadesafront()
    {
        return view('layouts.siode-front.petadesafront.index');
    }
    public function karangtarunafront()
    {
        return view('layouts.siode-front.karangtarunafront.index');
    }
    public function lpmfront()
    {
        return view('layouts.siode-front.lpmfront.index');
    }
    public function bpdfront()
    {
        return view('layouts.siode-front.bpdfront.index');
    }
    public function pemdesfront()
    {
        return view('layouts.siode-front.pemdesfront.index');
    }
    public function datapekerjafront()
    {
        return view('layouts.siode-front.datapekerjafront.index');
    }
    public function linmasfront()
    {
        return view('layouts.siode-front.linmasfront.index');
    }
}
