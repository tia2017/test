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
                                <span>Halaman kelola Data Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/dashboard"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"  aria-current="page">Kelola</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END::Header & Breadcrumb -->

            <!-- BEGIN::Tabel Data Users -->
            <div class="card">
                <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active " id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="/types/store">
                                {{ csrf_field() }}                          
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname">Nama Tipe</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama Tipe" name="name" id="name">
                                        @if($errors->has('name'))
                                            <div class="text-danger">
                                                {{ $errors->first('name')}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Keterangan</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Keterangan Tipe" name="description">
                                        @if($errors->has('description'))
                                            <div class="text-danger">
                                                {{ $errors->first('description')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- END::Tabel Data Users -->

        </div>
    </div>
<!-- END::Konten Utama -->
@endsection
