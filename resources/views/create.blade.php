@extends('master')
@section('content')


<div class="card card-primary mt-5 ml-5 mr-5">
              <div class="card-header">
                <h3 class="card-title">Tuliskan Pertanyaan Anda</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul"placeholder="tulis judul">
                  
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <input type="text" class="form-control" id= "isi" name="isi" placeholder="tulis pertanyaan">
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">buat pertanyaan</button>
                </div>
              </form>
            </div>
    
@endsection