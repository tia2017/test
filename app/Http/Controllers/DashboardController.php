<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Innovation;
use App\Innovation_step;
use App\Institute;
use Carbon\Carbon;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'Anda Harus Login Terlebih Dahulu !');
        } else {
            $ino_steps = Innovation_step::with('innovation')
            ->select("*", DB::raw("SUM(progress_persentage)/6 as persentasi"))
            ->groupBy('innovation_id')
            ->get();
    
            // print_r($ino_steps."<br>");
            // die();
    
            // $ino_steps = DB::table("innovations")
            //             ->select(DB::raw("innovations.id,
            //                             step_id,
            //                             steps.name as step_name,
            //                             innovations.name as innov_name,
            //                             progress_persentage as progres_innov,
            //                             SUM(progress_persentage)/6 as persentasi"))
            //             ->leftJoin('innovation_steps', 'innovations.id', '=', 'innovation_steps.innovation_id')
            //             ->leftJoin('steps', 'steps.id', '=', 'innovation_steps.step_id')
            //             ->groupBy('innovations.id')
            //             ->get();
    
            $inovasi = Innovation::all();
            $jumlah_inovasi = $inovasi->count();
    
            // MANA DIA? INI DIA! INI DIA!
            //NOMOR 2
    
            $total = DB::table('innovation_steps')
                    ->select('innovation_id', DB::raw('SUM(progress_persentage) as total'))
                    ->groupBy('innovation_id')
                    ->havingRaw('SUM(progress_persentage) = ?', [600])
                    ->get();
    
            
    
            $count = count($total);
            // dd($count);
            // die();
    
    
            $selesai = Innovation_step::all()
                        ->where('progress_persentage', '=', '100');
    
    
            $institute = Institute::all();
            $jumlah_institute = $institute->count();
    
            
    
            $semua_inovasi = Institute::withCount(['innovation'])
            ->get();
    
            // dd($semua_inovasi->innovation_count);
            // dd(Institute::with('innovation')->innovation->get());
            
    
                    
            $progres_perstep = DB::table('innovation_steps')
            ->select(DB::raw('steps.id, steps.name as name, COUNT(steps.id) as total'))
            ->leftJoin('steps', 'steps.id', '=', 'innovation_steps.step_id')
            ->where('progress_persentage', '=', '100')
            ->groupBy('step_id')
            ->get();
    
    
    
            for ($no = 0; $no < 6; $no++) {
                $datas = Innovation_step::where('step_id', '=', $no+1)->get();
                $jumlah = $datas->count();
                $jumlah_perstep[$no] = 0;
                if (count($progres_perstep) >= $no+1) {
                    $jumlah_perstep[$progres_perstep[$no]->id - 1] = ($progres_perstep[$no]->total / $jumlah) * 100;
                }
            }
    
            // print_r($jumlah_perstep);
    
            // die();
    
            return view('dashboard.index', [
                'ino_steps'=>$ino_steps,
                'jumlah_inovasi'=>$jumlah_inovasi,
                'jumlah_perangkat_daerah'=>$jumlah_institute,
                'semua_inovasi'=>$semua_inovasi,
                'jumlah_selesai' => $count,
                'jumlah_perstep' => $jumlah_perstep
               // 'distribusi'=>$distribusi
            ]);
        }
    }

    public function donut()
    {
        $data_steps = Innovation_step::with('innovation')
        ->groupBy('innovation_id')
        ->havingRaw('SUM(progress_persentage) < ?', [600])
        ->get();
        $dt = Carbon::now();

        $donut = array(
            "kurang" => array(),
            "antara" => array(),
            "lebih" => array(),
        );
        $more90 = 0;
        $sebulanan = 0;
        $belumsebulanan = 0;
        foreach ($data_steps as $data) {
            $year = Carbon::parse($data->created_at);
            // print_r($year."<br>");

            if ($year->year == $dt->year) {
                if ($year->month   == $dt->month) {
                    // $donut['belumsebulanan'] = $data->id;
                    array_push($donut["kurang"], $data->id);
                } else {
                    $jumlahhari = $year->diffInDays($dt, false);

                    if ($jumlah  > 30) {
                        // $donut['sebulanan'] = $data->id;
                        array_push($donut["antara"], $data->id);
                    // $sebulanan = $sebulanan + 1;
                    } else {
                        // $donut['sebulanan'] = $data->id;
                        array_push($donut["kurang"], $data->id);
                        // $belumsebulanan = $belumsebulanan + 1;
                    }
                }
            } else {
                // $donut['more90'] = $data->id;
                array_push($donut["lebih"], $data->id);
                // $more90 = $more90 + 1;
            }
        }

        // print_r($donut);
        // return $donut;
        return response()->json($donut);
    }
}
