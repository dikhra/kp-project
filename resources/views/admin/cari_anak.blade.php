@extends('layouts.app')

@section('content')
<div class="card">
<div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Balita</h6>
</div>
<div class="card-body">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">NIK</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Cari Data</button>
</form>
</div>
</div>
@endsection