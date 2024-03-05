~@extends('layouts.app')

@section('content')
<div class="card border-bottom-primary shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Input Data Anak</h6>
  </div>
  <div class="card-body">
    <form action="/anak/store" method="post">
      @csrf

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="anak_ke">Anak ke*</label>
          <input type="number" class="form-control" id="anak_ke" name="anak_ke" placeholder="Anak ke" min="1" required>
        </div>

        <div class="form-group col-md-6">
          <label for="tanggal_lahir">Tanggal Lahir*</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
      </div>

      <div class="form-group">
        <label>Jenis Kelamin*</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" checked required>
          <label class="form-check-label" for="laki-laki">Laki-laki</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nomor_kk">Nomor KK*</label>
          <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" required placeholder="Nomor Kartu Keluarga">
        </div>

        <div class="form-group col-md-6">
          <label for="nik">NIK*</label>
          <input type="text" class="form-control" id="nik" name="nik" required placeholder="NIK">
        </div>
      </div>

      <div class="form-group">
        <label for="nama">Nama*</label>
        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama">
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="berat_badan_lahir">Berat Badan Lahir (Kg)*</label>
          <input type="number" step="0.1" class="form-control" id="berat_badan_lahir" name="berat_badan_lahir" placeholder="Contoh : 5.2" min="0" >
        </div>

        <div class="form-group col-md-6">
          <label for="panjang_badan_lahir">Panjang Badan Lahir (cm)*</label>
          <input type="number" class="form-control" id="panjang_badan_lahir" name="panjang_badan_lahir" placeholder="Contoh : 75" min="0" required>
        </div>
      </div>

      <div class="form-group">
        <label for="nama_orangtua">Nama Orang Tua*</label>
        <input type="text" class="form-control" id="nama_orangtua" name="nama_orangtua" required placeholder="Nama orang tua">
      </div>

      <div class="form-group">
        <label for="nik_orangtua">NIK Orang Tua*</label>
        <input type="text" class="form-control" id="nik_orangtua" name="nik_orangtua" required placeholder="Nama orang tua">
      </div>

      <div class="form-group">
        <label for="nomor_telepon">Nomor Telepon Orang Tua*</label>
        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required placeholder="Nomor telepon orang tua">
      </div>

      <div class="form-group">
        <label for="alamat">Alamat Lengkap*</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" required placeholder="Alamat lengkap"></textarea>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6 col-6">
          <label for="rt">RT</label>
          <input type="number" class="form-control" id="rt" name="rt" placeholder="000" min="0">
        </div>

        <div class="form-group col-md-6 col-6">
          <label for="rw">RW</label>
          <input type="number" class="form-control" id="rw" name="rw" placeholder="000" min="0">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
@endsection
