@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
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
    </div>
</div>
@endsection
