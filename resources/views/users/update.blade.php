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
                <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active " id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="/users/update/{{ $df_user[0]->userId }}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname">Nama</label>
                                        <input type="text" value="{{ $df_user[0]->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama" name="name" id="nama">
                                        @error('name')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname">Email</label>
                                        <input type="email" value="{{ $df_user[0]->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="ex: scinovasi@gmail.com" name="email" id="email">
                                        @error('email')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password baru" name="password" id="password">
                                        @error('password')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password_confirmation">Ulangi Password</label>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Ulangi Password baru" name="password_confirmation" id="password_confirmation">
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="nik">NIK</label>
                                        <input type="text" value="{{ $df_user[0]->nik }}" class="form-control @error('nik') is-invalid @enderror" placeholder="Masukan NIK" name="nik" id="nik"></input>
                                        @error('nik')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nip">NIP</label>
                                        <input type="text" value="{{ $df_user[0]->nip }}" class="form-control @error('nip') is-invalid @enderror" placeholder="Maukkan NIP" name="nip" id="nip"></input>
                                        @error('nip')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="role">Role</label>
                                        <select id="role" name="role_id" class="form-control">
                                            <option>Pilih Role</option>
                                            @foreach($df_role as $role)
                                            <option {{ $df_user[0]->role_id == $role->id ? 'selected="selected"' : '' }} value="{{ $role->id }}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="telepon">Nomor Telepon</label>
                                        <input type="text" value="{{ $df_user[0]->phone }}" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="ex:081388932778 atau ex:0215679987" name="telepon" id="telepon"></input>
                                        @error('phone')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="role">Institute</label>
                                        <select id="role" name="institute_id" class="form-control">
                                                <option>Pilih Institute</option>
                                                @foreach($df_institute as $institute)
                                                <option {{ $df_user[0]->institute_id == $institute->id ? 'selected="selected"' : '' }} value="{{ $institute->id }}">{{$institute->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="gender" >Jenis Kelamin</label>
                                            {{-- <div class="form-row" style="margin-left:1px;margin-top:6px"> --}}
                                            <div class="custom-control custom-radio">
                                                <input {{ $df_user[0]->gender == 'laki-laki' ? 'checked="checked"' : '' }}  class="custom-control-input" type="radio" name="gender" id="gender" value="laki-laki">
                                                <label class="custom-control-label" for="inlineRadio1">Laki-Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input {{ $df_user[0]->gender == 'perempuan' ? 'checked="checked"' : '' }} class="custom-control-input" type="radio" name="gender" id="gender" value="perempuan">
                                                <label class="custom-control-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="address" name="alamat" rows="5" class="form-control @error('address') is-invalid @enderror" id="alamat">{{ $df_user[0]->address }}</textarea>
                                        @error('address')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
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
