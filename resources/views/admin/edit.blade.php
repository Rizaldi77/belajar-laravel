@extends('layouts.main')
@section('title', 'Edit Loket');
@section('content')
<div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Tutorial CRUD Laravel</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('update', $data->id)}}" method="post">
                    <!-- <input type="hidden" name="id" id="id" value="{{$data->id}}"> -->
                    <div class="form-group">
                        <label for="kode">Kode Buku</label>
                        <input type="text" name="kode" id="kode" value="{{$data->kode_buku}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" id="judul" value="{{$data->judul}}" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <textarea id="deskripsi" name="deskripsi" class="form-control">
                            {!!$data->deskripsi!!}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection