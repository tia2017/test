<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use App\Institute;
use App\Pilar;
use App\Step;
use App\Partner;
use App\Innovation;
use App\Innovation_step;
use App\Innovation_partner;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Session;

class TambahInovasiController extends Controller
{
    public function create()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'Anda Harus Login Terlebih Dahulu !');
        } else {
            $institute = Institute::all();
            $type = Type::all();
            $pilar = Pilar::all();
            $step = Step::all();
            $users_detail = Session::get('users_detail');
            // dd($users_detail->institute);
            return view('tambahInovasi.index', compact('institute', 'type', 'pilar', 'step', 'users_detail'));
        }
    }

    public function store(Request $request)
    {
        $request->validate ([
            //validate innovation
            'name' => 'required',
            'institute_id' => 'required',
            'innovation_type_id' => 'required',
            'pilar_id' => 'required',
            'created_by' => 'required',
            'description' => 'required',
            'benefit' => 'required',
            'unique_creativity' => 'required',
            'potency' => 'required',
            'strategy' => 'required',
            'risk_analysis' => 'required',
            'resource' => 'required',
            'date' => 'required',
            //validate innovations_step
            'step_id' => 'required',
            'explaination' => 'required',
            'progress_persentage' => 'required|numeric|min:0|max:100',
            'Mitra.*.Bentuk' => 'required',
            'Mitra.*.Nama' => 'required',
            'Mitra.*.Bidang' => 'required',
            'Mitra.*.Alamat' => 'required',
            'Mitra.*.Notelp' => 'required|regex:/^(0)[0-9]{10,12}$/',
            'Mitra.*.Email' => 'required|email'
        ]);

        //encode id user
        // $request->created_by =  base64_decode($request->created_by);
        // input innovation
        $data = Innovation::create($request->all());
        // input innovation_step
        $id_inovasinya = $data->id;
        // dd($request->Mitra);
        //input partner
        for($i = 0; $i < count($request->Mitra) ;$i++){
            // validate partner
            $data_partner =  Partner::create([
                'name' => $request->Mitra[$i]['Nama'],
                'form' => $request->Mitra[$i]['Bentuk'],
                'specialization' => $request->Mitra[$i]['Bidang'],
                'address' => $request->Mitra[$i]['Alamat'],
                'phone' => $request->Mitra[$i]['Notelp'],
                'email' => $request->Mitra[$i]['Email']
            ]);
            $id_partner = $data_partner->id;

            // input innovation_partner
            Innovation_partner::create([
                'innovation_id' => $id_inovasinya,
                'partner_id' => $data_partner->id
            ]);

        }


        for($i = 1; $i <= 6;$i++){
            //Input inovation_step yang otomatis udah selesai kondisi saat progress percentagenya = 100
            if($request['step_id']>$i){
                $data_step = Innovation_step::create([
                    'innovation_id' => $id_inovasinya,
                    'step_id' => $i,
                    'explaination' => '',
                    'progress_persentage' => 100
                ]);
            }
            //Input inovation_step saat ini sedang berjalan kondisi saat progress percentagenya > 0 dan < 100
            elseif($request['step_id']==$i){

                //upload Gambar dan memindakah file ke folder local image
                if($request->hasFile('files')){
                    $path = Storage::disk('')->putFile('public/files', $request->file('files')) ;
                    // $path = $request->file('files')->store('public/files');                     
                    $nameFile = $path;
                    // dd($path);
                } else{
                    $nameFile = null;
                }

                $data_step = Innovation_step::create([
                    'innovation_id' => $id_inovasinya,
                    'step_id' => $i,
                    'explaination' => $request['explaination'],
                    'file' => $nameFile,
                    'progress_persentage' => $request['progress_persentage']
                ]);

            }
            //Input inovation_step yang belum selesai kondisi saat progress percentagenya = 0
            else{
                $data_step = Innovation_step::create([
                    'innovation_id' => $id_inovasinya,
                    'step_id' => $i,
                    'explaination' => '',
                    'progress_persentage' => 0
                ]);
            }
        }


        return redirect('/inovasi')->with('status', 'Data Inovasi Berhasil Ditambah');
    }
}
