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
                                <span>Halaman kelola Data Pengguna</span>
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
                <div class="card-header row">
                    <div class="col col-sm-3">
                        <div class="card-options d-inline-block">
                            <a href="/users/tambah"><i class="ik ik-plus"></i></a>
                            <a href="/users"><i class="ik ik-rotate-cw"></i></a>
                        </div>
                    </div>
                    <!-- <div class="col col-sm-6">
                        <div class="card-search with-adv-search dropdown">
                            <form action="">
                                <input type="text" class="form-control global_filter" id="global_filter" placeholder="Pencarian" required>
                                <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Nama" data-column="0">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Email" data-column="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div align="center ">
                                            <button class="btn btn-theme">Cari</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div> -->
                </div>
                    <div class="card-body">
                        <table id="myTable" class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th width="20%" class="sorting_asc_disabled sorting_desc_disabled">Opsi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($df_user as $daftar_user)
                                    <tr>
                                        <th scope="row"> {{ $loop->iteration }} </th>
                                            <td> {{ $daftar_user->name }} </td>
                                            <td> {{ $daftar_user->email }} </td>
                                            {{-- <td> {{ $daftar_user->users}} </td> --}}
                                            <td> {{ $daftar_user->role_name }} </td>
                                            <td>
                                                <a href="/users/edit/{{$daftar_user->userId}}" class="badge badge-success">Ubah</a>
                                                <a href="/users/hapus/{{$daftar_user->userId}}" class="badge badge-danger">Delete</a>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
            </div>
            <!-- END::Tabel Data Users -->

        </div>
    </div>
<!-- END::Konten Utama -->

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
