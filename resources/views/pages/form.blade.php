@extends('layouts.main');
@section('title', 'Pengisian Formulir');
<br>
<br>
<br>
<br>

<br>
<div class="container">
<h1>Pengisian Form ULT</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulir Pelayanan</div>
 
                <div class="card-body">
                    <form method="POST" action="/proses">
                        @csrf
 
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" cols="30" rows="10">{{ old('address') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <input type="text" class="form-control" name="instansi" value="{{ old('instansi') }}">
                        </div>
                        <div class="form-group">
                            <label>No KTP / SIM</label>
                            <input type="text" class="form-control" name="noktp" value="{{ old('noktp') }}">
                        </div>
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" class="form-control" name="notelp" value="{{ old('nohp') }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div>
                            <label>Pilih Loket yang dituju</label>
                            <select type="text" class="form-control" name="loket" value="{{ old('loket') }}">
                              <option selected disabled value="">Loket yang dituju</option>
                              <option value="1">Sumber Daya</option>
                              <option value="2">Akademik Kemahasiswaan</option>
                              <option value="3">Kelembagaan</option>
                              <option value="4">Sistem Informasi dan Kerjasama</option>
                              <option value="5">TU dan Barang Milik Negara</option>
                              <option value="6">Perencanaan dan Penganggaran</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keperluan</label>
                            <textarea name="keperluan" class="form-control" cols="30" rows="10">{{ old('keperluan') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark">Simpan</button>
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>