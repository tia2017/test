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
                                <span>Halaman Kelola Data Type</span>
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

            <!-- BEGIN::Tabel Data Type -->
            <div class="card">
                <div class="card-header row">
                    <div class="col col-sm-3">
                        <div class="card-options d-inline-block">
                            <a href="#"><i class="ik ik-inbox"></i></a>
            
                            <!-- //link buat ke akun -->
                            <a href="/types/tambah"><i class="ik ik-plus"></i></a>
            
                            <a href="#"><i class="ik ik-rotate-cw"></i></a>
                            <div class="dropdown d-inline-block">
                                <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" Type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">More Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th width="70%">Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
            
                            @foreach($df_type as $daftar_type)                                        
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $daftar_type->name }} </td>
                                    <td>
                                        <a href="types/edit/{{$daftar_type->id}}" class="badge badge-success">Edit</a>
                                        <a href="/types/hapus/{{ $daftar_type->id }}"  class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END::Tabel Data Type -->

        </div>
    </div>
<!-- END::Konten Utama -->

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
