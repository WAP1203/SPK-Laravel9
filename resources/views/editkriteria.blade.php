@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data kriteria</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data kriteria</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data kriteria</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/kriteria/update/'.$kriteria->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" placeholder="harga" value="{{ $kriteria->harga}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jarak" class="col-sm-2 col-form-label">Jarak Lokasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jarak" placeholder="jarak" value="{{ $kriteria->jarak}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="luas" class="col-sm-2 col-form-label">Luas Ruangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="luas" placeholder="luas" value="{{ $kriteria->luas}}">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="jumlah_ruangan" class="col-sm-2 col-form-label">Jumlah Ruangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jumlah_ruangan" placeholder="jumlah_ruangan " value="{{ $kriteria->jumlah_ruangan}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fasilitas" class="col-sm-2 col-form-label">Fasilitas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="fasilitas" placeholder="fasilitas" value="{{ $kriteria->fasilitas}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="submit" class="btn btn-default float-right">Clear</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
