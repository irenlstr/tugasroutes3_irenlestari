@extends('template.master')

@section('judul')
<h1>Manajemen Siswa</h1>
@endsection

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kelas" method="POST">
                @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="InputNIS" placeholder="Enter kelas kamu">
                  </div>
                  <div class="form-group">
                    <label for="InputNama">jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="InputNama" placeholder="Enter jurusan kamu">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection