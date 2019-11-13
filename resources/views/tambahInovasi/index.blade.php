@extends('master')
@section('konten')
<!-- BEGIN::Konten Utama -->
<div class="main-content">
    <div class="container-fluid">
        <!-- BEGIN::Header & Breadcrumb -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-aperture bg-blue"></i>
                        <div class="d-inline">
                            <h5>Kelola</h5>
                            <span>Halaman kelola Data Inovasi</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/inovasi">Kelola</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Inovasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END::Header & Breadcrumb -->

        <!-- BEGIN::Tab Menu -->
        <div class="card">
            <div class="card-header">
                <h3>Tambah Inovasi</h3>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent2">

                <!-- /resources/views/post/create.blade.php -->

                <!-- <h1>Create Post</h1> -->

                <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif                        -->

                    <div class="col-md-12">
                        <form class="forms-sample" action="/tambah-inovasi" method="post" enctype='multipart/form-data'>                    
                        <!-- <input type="hidden" name="created_by" value="{{Session::get('id')}}">         -->
                        <input type="hidden" name="created_by" value="3">        
                        <input type="hidden" name="verification_status" value="True">     
                        <input type="hidden" name="date" value="{{date('Y-m-d h:i:s')}}">                   
                        {{ csrf_field() }}

                            <fieldset class="border p-2 mt-1 mb-3">
                            <legend class="w-auto"><h5>Inovasi</h5></legend>
                            <!-- BEGIN::Nama Inovasi -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="namaInovasi" >Nama Singkat Inovasi</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaInovasi" placeholder="Nama Singkat Inovasi yang Diajukan" name="name" value="{{old('name')}}">
                                        @error('name')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="perangkatDaerah">Perangkat Daerah</label>
                                        <select class="form-control @error('institute_id') is-invalid @enderror" placeholder="Perangkat Daerah" id="perangkatDaerah" name="institute_id">
                                        @foreach($institute as $ins_data)
                                            <option value="{{$loop->iteration}}">{{$ins_data->short_name}}</option>
                                        @endforeach

                                        @error('institute_id')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- END::Nama Inovasi -->

                            <!-- BEGIN::Jenis dan Pilar Inovasi -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="jenisInovasi">Jenis Inovasi</label>
                                        <select class="form-control" id="jenisInovasi" name="innovation_type_id">
                                        @foreach($type as $type_data)
                                            <option value="{{$loop->iteration}}">{{$type_data->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pilarInovasi">Pilar Smart City</label>
                                        <select class="form-control" id="pilarInovasi" name="pilar_id">
                                        @foreach($pilar as $pilar_data)
                                            <option value="{{$loop->iteration}}">{{ $pilar_data->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- END::Jenis dan Pilar Inovasi -->

                            <!-- BEGIN::Penjelasan Manfaat Keunikan Inovasi -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="penjelasanInovasi">Penjelasan Singkat Inovasi</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="penjelasanInovasi" rows="3" placeholder="Penjelasan mengenai inovasi yang dapat dipahami dengan baik" name="description">{{old('description')}}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="manfaatInovasi">Manfaat Inovasi</label>
                                        <textarea class="form-control @error('benefit') is-invalid @enderror" id="manfaatInovasi" rows="3" placeholder="Manfaat Inovasi ini bagi Penyelenggara, Pemerintah dan Masyarakat" name="benefit" >{{old('benefit')}}</textarea>
                                        @error('benefit')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="keunikanInovasi">Keunikan/Kreativitas Inovasi</label>
                                        <textarea class="form-control @error('unique_creativity') is-invalid @enderror" id="keunikanInovasi" rows="3" placeholder="Keunggulan dan keunikan Inovasi" name="unique_creativity" >{{old('unique_creativity')}}</textarea>
                                        @error('unique_creativity')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- END::Penjelasan Manfaat Keunikan Inovasi -->

                            <!-- BEGIN::Potensi Strategi Analisis Inovasi -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="potensiPengembangan">Potensi Pengembangan Inovasi</label>
                                        <textarea class="form-control @error('potency') is-invalid @enderror" id="potensiPengembangan" rows="3" placeholder="Kemungkinan perluasan, peningkatan, replikasi" name="potency" >{{old('potency')}}</textarea>
                                        @error('potency')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                        <textarea class="form-control @error('strategy') is-invalid @enderror" id="strategiKeberlangsungan" rows="3" placeholder="Upaya memastikan keberlangsungan (regulasi, kelembagaan, penyediaan sumber daya, dan model bisnis)" name="strategy" >{{old('strategy')}}</textarea>
                                        @error('strategy')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="analisisRisiko">Analisis Risiko</label>
                                        <textarea class="form-control @error('risk_analysis') is-invalid @enderror" id="analisisRisiko" rows="3" placeholder="Dampak yang perlu diantisipasi, hambatan, dan potensi kegagalan" name="risk_analysis" >{{old('risk_analysis')}}</textarea>
                                        @error('risk_analysis')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- END::Potensi Strategi Analisis Inovasi -->

                            <!-- BEGIN::Sumber Tahun Pilar Inovasi -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="potensiPengembangan">Sumber Daya yang Digunakan</label>
                                        <textarea class="form-control @error('resource') is-invalid @enderror" id="potensiPengembangan" rows="3" placeholder="Anggaran, tenaga kerja, fasilitas dan sumber daya yang diperlukan (berapa dan berasal dari mana)" name="resource" >{{old('resource')}}</textarea>
                                        @error('resource')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6" style="min-height: 200px;">
                                        <label for="date">Tahun Anggaran</label>
                                        <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="">
                                    </div>
                                </div>
                            </div>
                            <!-- END::Sumber Tahun Pilar Inovasi -->
                            </fieldset>

                            <fieldset class="border p-2 mt-1 mb-3">
                            <legend class="w-auto"><h5>Tahapan Inovasi</h5></legend>
                            <!-- BEGIN::Status, Progres, Keterangan -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="statusInovasi">Status Inovasi</label>
                                        <select class="form-control @error('step_id') is-invalid @enderror" id="statusInovasi" name="step_id">
                                            @foreach($step as $step_data)
                                            <option value="{{$loop->iteration}}">{{ $step_data->name}}</option>
                                            @endforeach
                                            @error('step_id')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Unggah File</label>
                                        <input type="file" name="imgStep" class="file-upload-default" value=>
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="File" value="{{old('file')}}">
                                            <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="progresInovasi">Progres Inovasi (%)</label>
                                        <input type="text" class="form-control @error('progress_persentage') is-invalid @enderror" placeholder="0-100" id="progresInovasi" name="progress_persentage" value="{{old('progress_persentage')}}">
                                        @error('progress_persentage')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="keteranganStatus">Keterangan</label>
                                        <textarea class="form-control @error('explaination') is-invalid @enderror" id="keteranganStatus" rows="3" placeholder="Keterangan mengenai status tahapan Inovasi"  name="explaination" >{{old('explaination')}}</textarea>
                                        @error('explaination')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- END::Status, Progres, Keterangan -->
                            </fieldset>

                            <fieldset class="border p-2 mt-1 mb-3">
                            <legend class="w-auto"><h5>Kemitraan</h5></legend>
                            <!-- BEGIN::Mitra Inovasi -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <!-- Repeater Html Start -->
                                        <div id="repeater">
                                        <!-- Key Array Form Repeater keperluan validate jika gagal agar tidak ketik ulang value -->
                                        <input type="text" class="keyFormMitra" name="keyFormMitra" value="{{old('keyFormMitra')}}" hidden>    
                                        <?php
                                            $keyFormMitra = old('keyFormMitra');
                                            if($keyFormMitra != null){
                                                $key = old('keyFormMitra')+1;                                                           
                                            }else{
                                                $key = 1;                                                        
                                            }                                                                               
                                        ?> 
                                        
                                            <!-- Repeater Heading -->
                                            <div class="repeater-heading">
                                                <!-- <h5 class="float-left">Kemitraan</h5> -->
                                                <span class="btn btn-primary pt-5 float-right repeater-add-btn">
                                                    Tambah Form
                                                </span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <!-- Repeater Items -->
                                            
                                            @for ($i=0; $i < $key; $i++)
                                            <div class="items" data-group="Mitra">
                                            <!-- Repeater Content -->                          
                                                <div class="item-content">                     
                                                    <div class="form-group">
                                                        <label for="bentukMitra" class="col-lg-2 col-md-2 control-label">Bentuk Mitra</label>
                                                        <div class="col-lg-10 col-md-10">
                                                            <input type="text" class="form-control @error('Mitra.*.Bentuk') is-invalid @enderror" id="bentukMitra" placeholder="Bentuk Mitra yang Melakukan Kerjasama" data-name="Bentuk" value="{{old('Mitra.'.$i.'.Bentuk') }}"  >                    
                                                            @error('Mitra.*.Bentuk')
                                                                <div class="invalid-feedback">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="namaMitra" class="col-lg-2 control-label">Nama Mitra</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control @error('Mitra.*.Nama') is-invalid @enderror" id="namaMitra" placeholder="Nama Mitra yang Melakukan Kerjasama" data-name="Nama" value="{{old('Mitra.'.$i.'.Nama') }}">
                                                            @error('Mitra.*.Nama')
                                                                <div class="invalid-feedback">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Repeater Remove Btn -->
                                                <div class="float-right repeater-remove-btn">
                                                    <button class="btn btn-danger remove-btn">
                                                        Hapus Form
                                                    </button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- Repeater End -->
                                    </div>
                                </div>
                            </div>
                            
                            <!-- END::Mitra Inovasi -->
                            </fieldset>

                            <!-- BEGIN::Tombol Simpan & Ulang -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-4">SIMPAN DATA</button>
                            <!-- BEGIN::Tombol Simpan & Ulang -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END::Tab Menu -->
    </div>
</div>
<!-- END::Konten Utama -->
@endsection
