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
                                <span>Halaman kelola Data Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/users"><i class="ik ik-home"></i></a>
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
                <div class="tab-content" id="pills-tabContent" align="">
                     <div class="tab-pane fade show active " id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="/users/store">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname">Nama</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama" name="name" id="nama">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname">Email</label>
                                        <input type="email" class="form-control" placeholder="ex: scinovasi@gmail.com" name="email" id="email">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" placeholder="Masukkan Password" name="password" id="password"></input>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="repassword">Ulangi Password</label>
                                        <input type="password" class="form-control" placeholder="Ulangi Password" name="repassword" id="repassword"></input>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" placeholder="Masukan NIK" name="nik" id="nik"></input>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control" placeholder="Maukkan NIP" name="nip" id="nip"></input>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="role">Role</label>
                                            <select id="role" name="role_id" class="form-control">
                                                <option>Pilih Role</option>
                                                @foreach($df_role as $role)
                                                    <option value="{{ $role->id }}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="telepon">Nomor Telepon</label>
                                        <input type="text" class="form-control" name="phone" placeholder="ex:081388932778 atau ex:0215679987" name="telepon" id="telepon"></input>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="role">Perangkat Daerah</label>
                                            <select id="role" name="institute_id" class="form-control">
                                                <option>Pilih Perangkat Daerah</option>
                                                @foreach($df_institute as $institute)
                                                    <option value="{{ $institute->id }}">{{$institute->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gender" >Jenis Kelamin</label>
                                        <div class="form-row">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender" value="laki-laki">
                                                <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                                </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender" value="perempuan">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="address" name="alamat" rows="5" class="form-control" id="alamat"></textarea>
                                    </div>
                                </div>
                                <br>
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
