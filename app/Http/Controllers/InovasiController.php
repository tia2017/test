<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\View;
use Illuminate\Support\Facades\DB;
use App\Innovation;
use App\Innovation_step;
use App\Innovation_partner;

class InovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response// $detail = Innovation::find('$Innovation');
        $detail = Innovation::find($Innovation);
        return view::make('detailInovasi.index')->with('detail', $detail);
        // return view('detailInovasi.index', ['detail' => $detail]);
        // Innovation::all();
     */
    public function index(Request $request)
    {
        $ino_steps = Innovation_step::with('innovation')
        ->where('progress_persentage', '>', '0')
        ->where('progress_persentage', '<', '100')
        ->get();
        return view('inovasi.index', compact('ino_steps'));
    }

    public function detail($id){
        $inovasi = Innovation::find($id);
        $step = Innovation_step::where('innovation_id',$id)
                ->orderBy('id', 'asc')
                ->get();
        $partner = Innovation_partner::where('innovation_id',$id)
                ->orderBy('id', 'asc')
                ->get();
        return view('inovasi.detail', compact('inovasi','step','partner'));

        // dibawah ini cara lain return
        // return view('detailInovasi.index', ['detail' => $detail]);
    }

    public function hapus($id){
        $inovasi = Innovation::find($id);
        $inovasi->delete();

        return redirect('inovasi')->with('status', 'Data Inovasi Berhasil Dihapus');
    }

    public function edit($id){
        $inovasi = Innovation::find($id);
        $step = Innovation_step::where('innovation_id',$id)
                ->orderBy('id', 'asc')
                ->get();
        return view('inovasi.edit', compact('inovasi','step'));
    }


    public function store(Request $request){

        if(isset($_POST['master_inovasi'])){
            // dd($request->all());
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
        }elseif(isset($_POST['step_inovasi'])){
            // dd($request->all());
            for($i=0;$i<=5;$i++){
                if($request->keterangan[$i]==NULL){
                    $step = Innovation_step::find($request->id_step[$i]);
                    $step->progress_persentage = $request->progress_inovasi[$i];
                    $step->explaination = '';
                    $step->save();
                }
                else{
                    $step = Innovation_step::find($request->id_step[$i]);
                    $step->progress_persentage = $request->progress_inovasi[$i];
                    $step->explaination = $request->keterangan[$i];
                    $step->save();
                }
            }
            return redirect('inovasi')->with('status', 'Data Tahapan Inovasi Berhasil Diubah');
        }


    }
    public function search(Request $request){
        $cari_global = $request->cari_global;
        $cari_inovasi = $request->cari_inovasi;
        $cari_perangkat = $request->cari_perangkat;
        $cari_tahun = $request->cari_tahun;
        $cari_bulan = $request->cari_bulan;

        $inovasi = Innovation::
              where('name', 'like', "%".$cari_inovasi."%")
            ->where('short_name', 'like', "%".$cari_perangkat."%")
            ->where('date', 'like', "%".$cari_tahun."%")
            ->where('date', 'like', "%".$cari_bulan."%")
            ->paginate();
    }

}
