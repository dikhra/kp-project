@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Balita</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <a href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Anak</span>
            </a>
            <div class="mr-3"></div>
            <a href="#" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-search"></i>
                </span>
                <span class="text">Cari Anak By NIK</span>
            </a>
        </div>

            <div class="mb-3"></div>
            <div class="table-responsive">
                <table class="table table-bordered"id="tableAnak" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tgl Lahir</th>
                            <th>Nama Ortu</th>
                            <th>No Telp Ortu</th>
                            <th>Tindakan </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>9876546</td>
                            <td>ASEP</td>
                            <td>Lekong</td>
                            <td>7 Masehi</td>
                            <td>Bagas Dribble</td>
                            <td>09678987</td>
                            <td><div class="row justify-content-center">
                            <a href="#" class="btn btn-success btn-circle btn-sm">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <div class="mx-1"></div>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <div class="mx-1"></div>
                                    <a href="#" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <div class="mx-1"></div>
                                    <a href="#" class="btn btn-secondary btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div class="mx-1"></div>
                            </div></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection
