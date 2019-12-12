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
                            <li class="breadcrumb-item active" aria-current="page">Ubah Inovasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END::Header & Breadcrumb -->

        <!-- BEGIN::Ubah Data Inovasi -->
        <div class="card">
            <div class="card-header">
                <h3>Ubah Data Inovasi</h3>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent2">

                    <div class="col-md-12">
                        <form class="forms-sample" method="post" action="/inovasi/edit">
                            {{ csrf_field() }}
                            {{-- {{ method_field('PUT')}} --}}

                            <fieldset class="border p-2 mt-1 mb-3">
                            <legend class="w-auto"><h5>Inovasi</h5></legend>
                            <!-- BEGIN::Nama Inovasi -->
                            <div class="form-group">
                                <input type="hidden" name="id_inovasi" value="{{$inovasi->id}}">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="namaInovasi">Nama Singkat Inovasi</label>
                                        <input type="text" class="form-control @error('innovation') is-invalid @enderror" id="namaInovasi" name="innovation" value="{{ $inovasi->name }}">
                                        @error('innovation')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="perangkatDaerah">Perangkat Daerah</label>
                                        <select class="form-control" id="perangkatDaerah" name="institute">
                                            @if (Session::get('role') == 2)
                                                @foreach($df_institute as $institute)
                                                <option {{ $inovasi->institute_id == $institute->id ? 'selected="selected"' : '' }} value="{{$institute->id}}">{{$institute->short_name}}</option>
                                                @endforeach
                                            @else  
                                                @foreach($df_institute as $institute)
                                                <option value="{{$user_detail->institute_id}}">{{$user_detail->institute->short_name}}</option>
                                                @endforeach
                                            @endif
                                            
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
                                        <select class="form-control" id="jenisInovasi" name="type">
                                            @foreach($df_type as $type)
                                            <option {{ $inovasi->innovation_type_id == $type->id ? 'selected="selected"' : '' }} value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pilarInovasi">Pilar Smart City</label>
                                        <select class="form-control" id="pilarInovasi" name="pillar">
                                        @foreach($df_pilar as $pilar)
                                        <option {{ $inovasi->pilar_id == $pilar->id ? 'selected="selected"' : '' }} value="{{$pilar->id}}">{{$pilar->name}}</option>
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
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="penjelasanInovasi" rows="3" placeholder="Penjelasan mengenai inovasi yang dapat dipahami dengan baik" name="description">{{$inovasi->description}}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="manfaatInovasi">Manfaat Inovasi</label>
                                        <textarea class="form-control @error('benefit') is-invalid @enderror" id="manfaatInovasi" rows="3" placeholder="Manfaat Inovasi ini bagi Penyelenggara, Pemerintah dan Masyarakat" name="benefit" >{{$inovasi->benefit}}</textarea>
                                        @error('benefit')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="keunikanInovasi">Keunikan/Kreativitas Inovasi</label>
                                        <textarea class="form-control @error('unique_creativity') is-invalid @enderror" id="keunikanInovasi" rows="3" placeholder="Keunggulan dan keunikan Inovasi" name="unique_creativity" >{{$inovasi->unique_creativity}}</textarea>
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
                                        <textarea class="form-control @error('potency') is-invalid @enderror" id="potensiPengembangan" rows="3" placeholder="Kemungkinan perluasan, peningkatan, replikasi" name="potency" >{{$inovasi->potency}}</textarea>
                                        @error('potency')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                        <textarea class="form-control @error('strategy') is-invalid @enderror" id="strategiKeberlangsungan" rows="3" placeholder="Upaya memastikan keberlangsungan (regulasi, kelembagaan, penyediaan sumber daya, dan model bisnis)" name="strategy" >{{$inovasi->strategy}}</textarea>
                                        @error('strategy')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="analisisRisiko">Analisis Risiko</label>
                                        <textarea class="form-control @error('risk_analysis') is-invalid @enderror" id="analisisRisiko" rows="3" placeholder="Dampak yang perlu diantisipasi, hambatan, dan potensi kegagalan" name="risk_analysis" >{{$inovasi->risk_analysis}}</textarea>
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
                                        <textarea class="form-control @error('resource') is-invalid @enderror" id="potensiPengembangan" rows="3" placeholder="Anggaran, tenaga kerja, fasilitas dan sumber daya yang diperlukan (berapa dan berasal dari mana)" name="resource" >{{$inovasi->resource}}</textarea>
                                        @error('resource')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6" style="min-height: 200px;">
                                        <label for="date">Tahun Anggaran</label>
                                        <input type="text" class="form-control datetimepicker-input" id="datepicker" value="{{$inovasi->date}}" data-toggle="datetimepicker" data-target="#datepicker" name="date">
                                    </div>
                                </div>
                            </div>
                            <!-- END::Sumber Tahun Pilar Inovasi -->
                            </fieldset>

                            <!-- BEGIN::Tombol Simpan & Ulang -->
                            <button type="submit" name="master_inovasi" class="btn btn-primary btn-lg btn-block mt-4 mb-4">SIMPAN DATA</button>
                            <!-- BEGIN::Tombol Simpan & Ulang -->
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- END::Ubah Data Inovasi -->

        <!-- BEGIN::Ubah Tahapan Inovasi -->
        <div class="card">
            <div class="card-header">
                <h3>Ubah Tahapan Inovasi</h3>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent2">

                    <div class="col-md-12">
                        <form class="forms-sample" method="post" action="/inovasi/edit" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            {{-- {{ method_field('PUT')}} --}}

                            <!-- BEGIN::Tahapan Inovasi -->
                            <div class="form-group">
                                <?php $no = 1?>
                                @foreach($step as $ino_step)
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="statusInovasi">Tahapan Inovasi <?=$no?></label>
                                        <select class="form-control" id="statusInovasi" disabled="disabled">
                                            <option value="{{$ino_step->step->name}}">{{$ino_step->step->name}}</option>
                                        </select>
                                    </div>
                                    <!-- <div class="col-md-2">
                                        <label>Unggah File</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="File">
                                            <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                                            </span>
                                        </div>
                                    </div> -->
                                    <input type="hidden" name="id_step[]" value="{{$ino_step->id}}">
                                    <div class="col-md-2 " id="progress">
                                        <label for="progresInovasi">Progres Inovasi (%)</label>
                                        <input type="text" class="form-control" id="progresInovasi" name="progress_inovasi[]"  value="{{$ino_step->progress_persentage}}">
                                    </div>
                                    <div class="col-md-1 ">
                                        <label for="files">Files</label>
                                        <!-- <input type="file" name="files[]" class="file-upload-default" multiple>
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="File" value="{{old('file')}}">
                                            <span class="input-group-append">
                                            <button class=" file-upload-browse btn btn-primary" type="button">Unggah</button>
                                            </span>
                                        </div>                                                                         -->
                                        <!-- <a href="{{Storage::url($ino_step->file)}}" id="files[{{$no}}]" class="popupimage btn btn-primary mt-2 mb-1" onClick='ShowModal("myModal-<?= $no ?>")'>Ubah</a>                                     -->
                                        <a href="{{Storage::url($ino_step->file)}}" class="myModal btn btn-primary mt-2 mb-1" data-toggle="modal" data-target="#myModal-<?php echo $no; // Displaying the increment ?>">Ubah</a>
                                        <!-- <button type="button" class="btn btn-primary mt-2 mb-1" data-toggle="modal" data-target="#myModal-<?php echo $no; // Displaying the increment ?>">                                 -->

                                        <div class="modal fade" id="myModal-<?php echo $no; // Displaying the increment ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <a href="" class="btn btn-primary" target="_blank">klik untuk melihat</a>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <div class="input-group">
                                                            <label>Unggah File</label>
                                                        </div>
                                                        <input type="file" name="files[]" class="file-upload-default" value="coba">
                                                        <div class="input-group col-xs-12">
                                                            <input type="text" class=" form-control file-upload-info" disabled placeholder="File">
                                                            <span class="input-group-append">
                                                            <button class=" file-upload-browse btn btn-primary" type="button">Unggah</button>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <label for="keteranganStatus">Keterangan</label>
                                        <textarea class="form-control" id="keteranganStatus" rows="3" name="keterangan[]">{{$ino_step->explaination}}</textarea>
                                    </div>
                                </div>
                                <?php $no = $no +1?>
                                @endforeach
                            </div>
                            <!-- END::Tahapan Inovasi -->

                            <!-- BEGIN::Tombol Simpan & Ulang -->
                            <button type="submit" name="step_inovasi" class="btn btn-primary btn-lg btn-block mt-4 mb-4">SIMPAN DATA</button>
                            <!-- BEGIN::Tombol Simpan & Ulang -->
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- END::Ubah Tahapan Inovasi -->

    </div>
</div>
<!-- END::Konten Utama -->
@endsection
