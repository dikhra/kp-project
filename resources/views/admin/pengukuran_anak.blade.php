@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pengukuran Anak</h6>
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
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $child->tanggal_lahir->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $child->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $child->nama }}</td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>:</td>
                                <td>{{ $childAge }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow text-center">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tindakan</h6>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-success btn-icon btn-lg" data-toggle="modal"
                        data-target="#inputModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Pengukuran</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3"></div>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="m-0 font-weight-bold text-dark mb-2">Daftar Pengukuran</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pengukuran</th>
                                    <th>Berat Badan (kg)</th>
                                    <th>Tinggi Badan (cm)</th>
                                    <th>Cara Pengukuran</th>
                                    <th>BB/U</th>
                                    <th>ZS BB/U</th>
                                    <th>TB/U</th>
                                    <th>ZS TB/U</th>
                                    <th>BB/TB</th>
                                    <th>ZS BB/TB</th>
                                    <th>Lingkar Kepala</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($measurements->isEmpty())
                                    <tr>
                                        <td colspan="13" class="text-center">Data tidak ditemukan</td>
                                    </tr>
                                @endif

                                @foreach ($measurements as $measurement)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $measurement->tanggal_pengukuran->format('d-m-Y') }}</td>
                                        <td>{{ $measurement->berat_badan }}</td>
                                        <td>{{ $measurement->panjang_badan }}</td>
                                        <td>{{ $measurement->cara_pengukuran }}</td>
                                        <td>{{ $measurement->bb_u }}</td>
                                        <td>{{ $measurement->zs_bb_u }}</td>
                                        <td>{{ $measurement->tb_u }}</td>
                                        <td>{{ $measurement->zs_tb_u }}</td>
                                        <td>{{ $measurement->bb_tb }}</td>
                                        <td>{{ $measurement->zs_bb_tb }}</td>
                                        <td>{{ $measurement->lingkar_kepala }}</td>
                                        <td>
                                            <a href="/pengukuran_anak/{{ $measurement->id }}/edit"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="/pengukuran_anak/{{ $measurement->id }}/hapus"
                                                class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inputModalLabel">Tambah Data Pengukuran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/measurement/store" method="POST">
                        @csrf
                        <input type="hidden" name="nik" value="{{ $child->nik }}">
                        <div class="form-group">
                            <label for="tanggal_pengukuran">Tanggal Pengukuran</label>
                            <input type="date" class="form-control" id="tanggal_pengukuran" name="tanggal_pengukuran"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="berat_badan">Berat Badan (kg)*</label>
                            <input type="number" step="0.01" class="form-control" id="berat_badan" name="berat_badan"
                                required min="0">
                        </div>
                        <div class="form-group">
                            <label for="tinggi_badan">Panjang Badan (cm*)</label>
                            <input type="number" class="form-control" id="panjang_badan" name="panjang_badan" required
                                min="0">
                        </div>
                        <div class="form-group">
                            <label for="lingkar_kepala">Lingkar Kepala (cm)</label>
                            <input type="number" class="form-control" id="lingkar_kepala" name="lingkar_kepala">
                        </div>
                        <div class="form-group">
                            <label for="cara_pengukuran">Cara Pengukuran</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cara_pengukuran" id="telentang"
                                    value="Telentang" checked>
                                <label class="form-check-label" for="telentang">Telentang</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cara_pengukuran" id="berdiri"
                                    value="Berdiri">
                                <label class="form-check-label" for="berdiri">Berdiri</label>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
