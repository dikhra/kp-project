@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Balita</h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-start">
                <div class="col-6 col-md-3 col-sm-4">
                    <a href="/tambah_anak" class="btn btn-success btn-icon">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Anak</span>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-sm-4">
                    <a href="#" class="btn btn-info btn-icon">
                        <span class="icon text-white-50">
                            <i class="fas fa-search"></i>
                        </span>
                        <span class="text">Cari Anak by NIK</span>
                    </a>
                </div>
            </div>
            <div class="mb-3"></div>
            <div class="table-responsive">
                <table class="table table-bordered" id="tableAnak" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Orang Tua</th>
                            <th>Nomor Telepon Orang Tua</th>
                            <th>Tindakan </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($children as $key => $child)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $child->nik }}</td>
                                <td>{{ $child->nama }}</td>
                                <td>{{ $child->jenis_kelamin }}</td>
                                <td>{{ $child->tanggal_lahir->format('d-m-Y') }}</td>
                                <td>{{ $child->nama_ortu }}</td>
                                <td>{{ $child->no_ortu }}</td>
                                <td>
                                    <div class="col mx-1 my-1">
                                        <div class="row">
                                            <a href="/pengukuran_anak/{{ $child['nik'] }}"
                                                class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <div class="mx-1"></div>
                                            <a href="/child/delete/{{ $child['nik'] }}"
                                                class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                        <div class="mb-1"></div>
                                        <div class="row">
                                            <a href="/perkembangan_anak/{{ $child['nik'] }}"
                                                class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-search"></i>
                                            </a>
                                            <div class="mx-1"></div>
                                            <a href="#" class="btn btn-secondary btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/datatables-anak.js"></script>
@endsection
