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
                            <li class="breadcrumb-item active" aria-current="page">Kelola</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END::Header & Breadcrumb -->

        <!-- BEGIN::Tabel Data Inovasi Berjalan -->
        <div class="card">
            <div class="card-header row">
                <div class="col col-sm-3">
                    <div class="card-options d-inline-block">
                        <a href="tambah-inovasi"><i class="ik ik-plus"></i></a>
                        <a href="inovasi"><i class="ik ik-rotate-cw"></i></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <table id="tableInovasi" class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th>Inovasi</th>
                            <th>Perangkat Daerah</th>
                            <th>Tahapan</th>
                            <th>Progres</th>
                            <th>Total Progres</th>
                            <th class="sorting_asc_disabled sorting_desc_disabled">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        @foreach($ino_steps as $ino_step)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td><a href="/inovasi/detail/{{$ino_step->innovation->id}}">{{$ino_step->innovation->name}}</a></td>
                            <td>{{$ino_step->innovation->institute->name}}</td>
                            <td>{{$ino_step->step->name}}</td>
                            <td>{{$ino_step->progress_persentage}}%</td>
                            <td>{{$total[$no]->persentasi}}%</td>
                            <td>
                                <a href="/inovasi/edit/{{$ino_step->innovation->id}}" class="badge badge-success">Ubah</a>
                                <a href="/inovasi/hapus/{{$ino_step->innovation->id}}" class="myModal badge badge-danger" data-toggle="modal" data-target="#myModal-<?php echo $no; ?>">Hapus</a>
                            </td>


                            <div class="modal fade" id="myModal-<?php echo $no; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title">Peringatan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <p>Yakin Ingin Menghapus Data ?</p>
                                        </div>

                                        <div class="modal-footer">
                                            <a href="" class="btn badge-danger">Hapus</a>
                                            <a class="btn btn-secondary" data-dismiss="modal">Batalkan</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </tr>
                        <?php $no += 1; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END::Tabel Data Inovasi Berjalan -->


        <!-- BEGIN::Tabel Data Inovasi Selesai -->
        <div class="card">
            <div class="card-header row">
                <div class="col col-sm-3">
                    <div class="card-options d-inline-block">
                        <a href="tambah-inovasi"><i class="ik ik-plus"></i></a>
                        <a href="inovasi"><i class="ik ik-rotate-cw"></i></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <table id="tableInovasi" class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th>Inovasi</th>
                            <th>Perangkat Daerah</th>
                            <th>Tahapan</th>
                            <th>Progres</th>
                            <th>Total Progres</th>
                            <th class="sorting_asc_disabled sorting_desc_disabled">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nom = $no; ?>
                        @foreach($ino_steps2 as $ino_step2)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td><a href="/inovasi/detail/{{$ino_step2->innovation->id}}">{{$ino_step2->innovation->name}}</a></td>
                            <td>{{$ino_step2->innovation->institute->name}}</td>
                            <td>{{$ino_step2->step->name}}</td>
                            <td>{{$ino_step2->progress_persentage}}%</td>
                            <td>{{$total[$no]->persentasi}}%</td>
                            <td>
                                <a href="/inovasi/edit/{{$ino_step2->innovation->id}}" class="badge badge-success">Ubah</a>
                                <a href="/inovasi/hapus/{{$ino_step2->innovation->id}}" class="myModal badge badge-danger" data-toggle="modal" data-target="#myModal-<?php echo $nom; ?>">Hapus</a>
                            </td>

                            <div class="modal fade" id="myModal-<?php echo $nom; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title">Peringatan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <p>Yakin Ingin Menghapus Data ?</p>
                                        </div>

                                        <div class="modal-footer">
                                            <a href="" class="btn badge-danger">Hapus</a>
                                            <a class="btn btn-secondary" data-dismiss="modal">Batalkan</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </tr>
                        <?php $nom += 1; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END::Tabel Data Inovasi Selesai -->

    </div>
</div>
<!-- END::Konten Utama -->

<script>
    $(document).ready(function() {
        $('#tableInovasi').DataTable();
    });
</script>
@endsection