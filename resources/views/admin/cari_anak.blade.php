@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cari Anak</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label class="h4 font-weight-bold"for="nik">Nomor Induk Kependudukan</label>
                    <input type="number" class="form-control" id="nik" >
                </div>
                <div class="form-row justify-content-center">
                    <button type="submit" class="btn btn-primary">Cari Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
