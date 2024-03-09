@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Perkembangan Anak</h1>
    </div>
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Data Anak</h6>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $child->nik }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $child->nama }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $child->tanggal_lahir->format('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $child->alamat_lengkap }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mb-3"></div>
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengukuran</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="tableAnak" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pengukuran</th>
                        <th>Berat Badan (kg)</th>
                        <th>Tinggi Badan (cm)</th>
                        <th>BBU</th>
                        <th>TBU</th>
                        <th>BBTB</th>
                        <th>Naik Berat Badan</th>
                        <th>Umur Saat Pengukuran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>01-01-2024</td>
                        <td>10</td>
                        <td>100</td>
                        <td>10</td>
                        <td>100</td>
                        <td>10</td>
                        <td>O</td>
                        <td>1 Tahun - 7 Bulan - 2 Hari</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>01-02-2024</td>
                        <td>10</td>
                        <td>100</td>
                        <td>10</td>
                        <td>100</td>
                        <td>10</td>
                        <td>B</td>
                        <td>1 Tahun - 7 Bulan - 2 Hari</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>01-03-2024</td>
                        <td>10</td>
                        <td>100</td>
                        <td>10</td>
                        <td>100</td>
                        <td>10</td>
                        <td>O</td>
                        <td>1 Tahun - 7 Bulan - 2 Hari</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mb-3"></div>
    <div class="row">
        <div class="col-md-6 my-2">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Perkembangan (BB/U)</h6>
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Perkembangan (TB/U)</h6>
                </div>
                <div class="card-body">
                    <canvas id="myChart2" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
