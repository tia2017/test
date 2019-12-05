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
                                    <div class="col-9">{{ $inovasi_institute->short_name }}
                                        <br>{{ $inovasi_institute->innovation_count / $jumlah_inovasi * 100}} (%)
                                    </div>
                                    <div class="col-3 text-right"></div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-green" role="progressbar" style="width:  {{ $inovasi_institute->innovation_count / $jumlah_inovasi * 100}}%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- @foreach($inovasi_institute->innovation as $ino_ino)
                                <div class="row mb-15">
                                    <div class="col-9">
                                        {{$ino_ino->name}}
                                    </div>
                                    @foreach($ino_ino->innovation_step as $ino)
                                    <div class="col-3 text-right"></div>
                                    <div class="col-12">{{$ino->ino_steps}}
                                    	{{$ino->progress_persentage}}%
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: {{$ino->progress_persentage}}%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach -->
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
                        <a href="/tambah-inovasi"><i class="ik ik-plus"></i></a>
                        <a href="/dashboard"><i class="ik ik-rotate-cw"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="tableDashboard" class="table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Inovasi</th>
                            <th>Perangkat Daerah</th>
                            <th>Total Progres</th>
                            <th>Tanggal Buat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ino_steps as $ino_step)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td><a href="/inovasi/detail/{{$ino_step->innovation->id}}" >{{$ino_step->innovation->name}}</a></td>
                            <td>{{$ino_step->innovation->institute->short_name}}</td>
                            <td>{{number_format($ino_step->persentasi, 1, '.', ',')}}%</td>
                            <td>{{date("d M Y", strtotime($ino_step->innovation->created_at))}}</td>
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
    $(document).ready(function() {
        $('#tableDashboard').DataTable();
    });
</script>
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
