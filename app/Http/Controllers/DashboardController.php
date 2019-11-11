<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Innovation;
use App\Innovation_step;
use App\Institute;

class DashboardController extends Controller
{
    public function index()
    {
    	$ino_steps = Innovation_step::with('innovation')
        ->where('progress_persentage', '>', '0')
        ->where('progress_persentage', '<', '100')
        ->get();

        $inovasi = Innovation::all();
    	$jumlah_inovasi = $inovasi->count();

    	$institute = Institute::all();
    	$jumlah_institute = $institute->count();


        $semua_inovasi = Institute::with('innovation')
        ->get();
        

        return view('dashboard.index', [
        	'ino_steps'=>$ino_steps,
        	'jumlah_inovasi'=>$jumlah_inovasi,
        	'jumlah_perangkat_daerah'=>$jumlah_institute,
            'semua_inovasi'=>$semua_inovasi
        ]);

    }

}
