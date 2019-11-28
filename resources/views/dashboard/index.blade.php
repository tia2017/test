@extends('master')
@section('konten')
<div class="main-content">
    <div class="container-fluid">

        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-bar-chart-2 bg-blue"></i>
                        <div class="d-inline">
                            <h5>Dasbor</h5>
                            <span>Informasi Inovasi Smart City Depok</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>

        <!-- BEGIN::Informasi Statistik Global -->
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h2>{{ $jumlah_inovasi }}</h2>
                                <h6>Inovasi</h6>
                            </div>
                            <div class="icon">
                                <i class="ik ik-thumbs-up"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Dari {{ $jumlah_perangkat_daerah }} Perangkat Daerah</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h2>{{ $jumlah_selesai }}</h2>
                                <h6>Jumlah Inovasi Selesai</h6>
                            </div>
                            <div class="icon">
                                <i class="ik ik-help-circle"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Selesai 100%</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END::Informasi Statistik Global -->

        <!-- BEGIN::Baris Keterkinian & Distribusi -->
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="min-height: 422px;">
                    <div class="card-header"><h3>Keterkinian Data Inovasi</h3></div>
                    <div class="card-body">
                        <div id="c3-donut-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h3>Distribusi Perkembangan</h3></div>
                    
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="row mb-15">
                                    <div class="col-4">Perumusan Masalah atau Kebutuhan</div>
                                <div class="col-2 text-right">{{$jumlah_perstep[0]}}%</div>
                                    <div class="col-6">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-green" role="progressbar" style="width: {{$jumlah_perstep[0]}}%" aria-valuenow="{{$jumlah_perstep[0]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <div class="col-4">Perumusan Ide</div>
                                    <div class="col-2 text-right">{{$jumlah_perstep[1]}}%</div>
                                    <div class="col-6">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: {{$jumlah_perstep[1]}}%" aria-valuenow="{{$jumlah_perstep[1]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <div class="col-4">Perencanaan Pembangunan</div>
                                    <div class="col-2 text-right">{{$jumlah_perstep[2]}}%</div>
                                    <div class="col-6">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: {{$jumlah_perstep[2]}}%" aria-valuenow="{{$jumlah_perstep[2]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <div class="col-4">Pembangunan</div>
                                    <div class="col-2 text-right">{{$jumlah_perstep[3]}}%</div>
                                    <div class="col-6">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{$jumlah_perstep[3]}}%" aria-valuenow="{{$jumlah_perstep[3]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <div class="col-4">Implementasi</div>
                                    <div class="col-2 text-right">{{$jumlah_perstep[4]}}%</div>
                                    <div class="col-6">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: {{$jumlah_perstep[4]}}%" aria-valuenow="{{$jumlah_perstep[4]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Evaluasi</div>
                                    <div class="col-2 text-right">{{$jumlah_perstep[5]}}%</div>
                                    <div class="col-6">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-grey" role="progressbar" style="width: {{$jumlah_perstep[5]}}%" aria-valuenow="{{$jumlah_perstep[5]}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END::Kolom 1 Inovasi PD -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END::Baris Keterkinian & Distribusi -->

        <!-- BEGIN::Baris Inovasi PD -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Inovasi Berdasarkan Perangkat Daerah</h3></div>
                    <div class="card-body">
                        <div class="row container">
                            <!-- BEGIN::Kolom 1 Inovasi PD -->
                            @foreach($semua_inovasi as $inovasi_institute)
                            <div class="col-lg-2 col-md-12">
                                <div class="row mb-15">
                                    <div class="col-9">{{ $inovasi_institute->short_name }} (Satuan)</div>
                                    <div class="col-3 text-right"></div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-green" role="progressbar" style="width:  {{ $inovasi_institute->innovation_count / $jumlah_inovasi * 100}}%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($inovasi_institute->innovation as $ino_ino)
                                <div class="row mb-15">
                                    <div class="col-9">
                                        {{$ino_ino->name}}
                                    </div>
                                    @foreach($ino_ino->innovation_step as $ino)
                                    <div class="col-3 text-right">%</div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: {{$ino->progress_persentage}}%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                            
                            <!-- END::Kolom  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END::Baris Inovasi PD -->

        <!-- BEGIN::Tabel Data Inovasi -->
        <div class="card">
            <div class="card-header row">
                <div class="col col-sm-3">
                    <div class="card-options d-inline-block">
                        <a href="#"><i class="ik ik-inbox"></i></a>
                        <a href="#"><i class="ik ik-plus"></i></a>
                        <a href="#"><i class="ik ik-rotate-cw"></i></a>
                        <div class="dropdown d-inline-block">
                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">More Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="card-search with-adv-search dropdown">
                        <form action="">
                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Pencarian" required>
                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Inovasi" data-column="0">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Perangkat Daerah/Dewan Smart City" data-column="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="Tahun" data-column="2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col3_filter" placeholder="Bulan" data-column="3">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-theme">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-sm-3">
                    <div class="card-options text-right">
                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
                        <a href="#"><i class="ik ik-chevron-left"></i></a>
                        <a href="#"><i class="ik ik-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="advanced_table" class="table">
                    <thead>
                        <tr>
                            <th class="nosort" width="10">
                                <label class="custom-control custom-checkbox m-0">
                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </th>
                            <th class="nosort">Inovasi</th>
                            <th>Perangkat Daerah</th>
                            <th>Tahapan</th>
                            <th>Progres</th>
                            <th>Total Progres</th>
                            <th>Tanggal Buat</th>
                            <th>Tanggal Ubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ino_steps as $ino_step)
                        <tr>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </td>
                            <td><a href="/inovasi/detail/{{$ino_step->innovation->id}}" >{{$ino_step->innovation->name}}</a></td>
                            <td>{{$ino_step->innovation->institute->short_name}}</td>
                            <td>{{$ino_step->step->name}}</td>
                            <td>{{$ino_step->progress_persentage}}%</td>                        
                            <td>70%</td>
                            <td>{{$ino_step->created_at}}</td>
                            <td>{{$ino_step->updated_at}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- END::Tabel Data Inovasi -->

    </div>
</div>

<script>
        var url = "{{url('dashboard/donut')}}";
        var Years = new Array();
        var Labels = new Array();
        var Prices = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            // console.log(response.kurang)
            
            var datanya = [
                ['Kurang dari 30 Hari'],
                ['Lebih dari 90 Hari'],
                ['Antara 30 - 90 Hari'],
            ]

            for (var i = 0; i < response.kurang.length; i++) {                
                datanya[0][i+1] = response.kurang[i];
            }

            for (var i = 0; i < response.antara.length; i++) {                
                datanya[2][i+1] = response.kurang[i];
            }

            for (var i = 0; i < response.lebih.length; i++) {                
                datanya[1][i+1] = response.kurang[i];
            }

            // console.log(datanya);

            var c3DonutChart = c3.generate({
                bindto: '#c3-donut-chart',
                data: {
                columns: datanya,
                type: 'donut',
                onclick: function(d, i) {
                    console.log("onclick", d, i);
                },
                onmouseover: function(d, i) {
                    console.log("onmouseover", d, i);
                },
                onmouseout: function(d, i) {
                    console.log("onmouseout", d, i);
                }
                },
                color: {
                pattern: ['rgba(88,216,163,1)', 'rgba(4,189,254,0.6)', 'rgba(237,28,36,0.6)']
                },
                padding: {
                top: 0,
                right: 0,
                bottom: 30,
                left: 0,
                },
                donut: {
                title: "Persentase Terkini"
                }
            });

            setTimeout(function() {
                c3DonutChart.load({
                columns: response
                });
            }, 1500);

            setTimeout(function() {
                c3DonutChart.unload({
                ids: 'data1'
                });
                c3DonutChart.unload({
                ids: 'data2'
                });
            }, 2500);
          });
        });
        </script>
@endsection