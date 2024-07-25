@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Studio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Datastudio</li>
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
              <form method="POST" action="{{ url('/studio/update/'.$studio->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lokasi" placeholder="lokasi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kontak" placeholder="kontak">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peralatan" class="col-sm-2 col-form-label">Peralatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="peralatan" placeholder="peralatan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="biaya_tarif" class="col-sm-2 col-form-label">Biaya & Tarif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="biaya_tarif" placeholder="biaya_tarif">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="rating" placeholder="rating">
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
