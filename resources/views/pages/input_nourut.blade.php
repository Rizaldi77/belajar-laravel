@extends('layouts.main');
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulir Pelayanan</div>
 
                <div class="card-body">
                    <form method="POST" action="/feedbackproses">
                        @csrf
 
                        <div class="form-group">
                            <label>No urut</label>
                            <input type="text" class="form-control" name="no_urut" value="{{ old('no_urut') }}" required>
                        </div>
                        <div>
                            <label>Pilih Kepuasan</label>
                            <select type="text" class="form-control" name="loket" value="{{ old('kepuasan') }}" required>
                              <option selected disabled value="">Tingkat Kepuasan</option>
                              <option value="1" style="font-size: 25px">&#128525; Sangat Puas</option>
                              <option value="2" style="font-size: 25px">&#128514; Puas</option>
                              <option value="3" style="font-size: 25px">&#128512; Kurang Puas</option>
                              <option value="4" style="font-size: 25px">&#128561; Tidak Puas</option>
                              <option value="5" style="font-size: 25px">&#129324; Sangat Tidak Puas</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-top: 10px">
                            <button class="btn btn-dark">Simpan</button>
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>