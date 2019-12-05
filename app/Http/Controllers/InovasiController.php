<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\View;
use Illuminate\Support\Facades\DB;
use App\Innovation;
use App\Innovation_step;
use App\Innovation_partner;
use App\Institute;
use App\Pilar;
use App\Type;
use Illuminate\Support\Facades\Storage;
use Session;

class InovasiController extends Controller
{
    public function index(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'Anda Harus Login Terlebih Dahulu !');
        } else {
            $totals = DB::table("innovations")
                ->select(DB::raw("innovations.id,
                                        innovation_steps.id as innov_step_id,
                                        step_id,
                                        steps.name as step_name,
                                        innovations.name as innov_name, 
                                        progress_persentage as progres_innov,
                                        SUM(progress_persentage)/6 as persentasi"))
                ->leftJoin('innovation_steps', 'innovations.id', '=', 'innovation_steps.innovation_id')
                ->leftJoin('steps', 'steps.id', '=', 'innovation_steps.step_id')
                // ->where('progress_persentage', '!=', '0')
                // ->where('progress_persentage', '!=', '100')
                ->groupBy(['innovations.id'])
                ->get();
    
            $ino_steps = Innovation_step::with('innovation')
                ->where('progress_persentage', '!=', '0')
                ->groupBy('innovation_id')
                ->get();
    
            // dd($total);
    
            // $ino_steps = Innovation_step::with('innovation')
            //     ->select('*',DB::raw("SUM(progress_persentage)/6 as persentasi"))
            //     ->where('progress_persentage', '!=', '0')
            //     ->where('progress_persentage', '!=', '100')
            //     ->groupBy('innovation_id')
            //     ->get();
            $id = Innovation_step::with('innovation')
                ->select('innovation_id')
                ->get();
    
    
            // dd($total);
            return view('inovasi.index', compact('ino_steps', 'totals'));
        }
    }

    public function detail($id)
    {
        $inovasi = Innovation::find($id);
        $step = Innovation_step::where('innovation_id', $id)
            ->orderBy('id', 'asc')
            ->get();
        $partner = Innovation_partner::where('innovation_id', $id)
            ->orderBy('id', 'asc')
            ->get();
        // $pathGambar = Storage::url('$step->file');
        // dd($inovasi);
        return view('inovasi.detail', compact('inovasi', 'step', 'partner'));

        // dibawah ini cara lain return
        // return view('detailInovasi.index', ['detail' => $detail]);
    }

    public function hapus($id)
    {
        $inovasi = Innovation::find($id);
        $file = Innovation_step::where([
            ['innovation_id', $id],
            ['file', '!=', null]
        ])->get(['file'])->pluck('file');

        // delete file di storage
        foreach ($file as $files) {
            Storage::disk('local')->delete($files);
        }

        // delete semua inovasi
        $inovasi->delete();

        return redirect('inovasi')->with('status', 'Data Inovasi Berhasil Dihapus');
    }

    public function edit($id)
    {
        $inovasi = Innovation::find($id);
        $step = Innovation_step::where('innovation_id', $id)
            ->orderBy('id', 'asc')
            ->get();
        $df_institute = Institute::get();
        $df_type = Type::get();
        $df_pilar = Pilar::get();
        return view('inovasi.edit', compact('inovasi', 'step', 'df_institute', 'df_pilar', 'df_type'));
    }


    public function store(Request $request)
    {
        if (isset($_POST['master_inovasi'])) {
            // update master inovasi
            $data = Innovation::where('id', $request->id_inovasi)->update([
                'name' => $request->innovation,
                'description' => $request->description,
                'benefit' => $request->benefit,
                'unique_creativity' => $request->unique_creativity,
                'potency' => $request->potency,
                'strategy' => $request->strategy,
                'risk_analysis' => $request->risk_analysis,
                'resource' => $request->resource,
                'date' => $request->date
            ]);

            return redirect('inovasi')->with('status', 'Data Inovasi Berhasil Diubah');
        } elseif (isset($_POST['step_inovasi'])) {
            // dd($request->all());
            // Move data file
            $df_file = $request->file('files');
            // dd($df_file);

            // if($request->hasFile('files'))
            // {
            //     $key = 0;
            //     foreach ($df_file as $file) {
            //         $nameFile[$key] = $file->store('public/user_');
            //         $key++;
            //     }
            // }else{
            //     $nameFile=null;
            // }

            // Update data tahapan
            for ($i = 0; $i <= 5; $i++) {
                if ($request->keterangan[$i] == null) {
                    $step = Innovation_step::find($request->id_step[$i]);
                    $step->progress_persentage = $request->progress_inovasi[$i];
                    if (@$df_file[$i] != null) {
                        $nameFile = Storage::disk('')->putFile('public/files', $df_file[$i]) ;
                        $step->file = $nameFile;
                    }
                    $step->explaination = '';
                    $step->save();
                } else {
                    // dd($i);
                    $step = Innovation_step::find($request->id_step[$i]);
                    $step->progress_persentage = $request->progress_inovasi[$i];
                    if (@$df_file[$i] != null) {
                        // $nameFile = Storage::putFile('public/files', $df_file[$i]);
                        $nameFile = Storage::disk('')->putFile('public/files', $df_file[$i]) ;
                        // $nameFile = $df_file[$i]->store('public/files');
                        $step->file = $nameFile;
                    }
                    $step->explaination = $request->keterangan[$i];
                    $step->save();
                }
            }
            return redirect('inovasi')->with('status', 'Data Tahapan Inovasi Berhasil Diubah');
        }
    }
    public function search(Request $request)
    {
        $cari_global = $request->cari_global;
        $cari_inovasi = $request->cari_inovasi;
        $cari_perangkat = $request->cari_perangkat;
        $cari_tahun = $request->cari_tahun;
        $cari_bulan = $request->cari_bulan;

        $inovasi = Innovation::where('name', 'like', "%" . $cari_inovasi . "%")
            ->where('short_name', 'like', "%" . $cari_perangkat . "%")
            ->where('date', 'like', "%" . $cari_tahun . "%")
            ->where('date', 'like', "%" . $cari_bulan . "%")
            ->paginate();
    }
}
