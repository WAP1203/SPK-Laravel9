@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Studio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Studio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Studio</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('studio/add') }}" class="btn-sm btn-success">Tambah Data Studio</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Kontak</th>
                    <th>Peralatan</th>
                    <th>Biaya & Tarif</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $studio)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $studio->nama }}</td>
                    <td>{{ $studio->lokasi }}</td>
                    <td>{{ $studio->kontak }}</td>
                    <td>{{ $studio->peralatan }}</td>
                    <td>{{ $studio->biaya_tarif }}</td>
                    <td>{{ $studio->rating }}</td>
                    <td>
                      <a href="{{ url('studio/edit/'.$studio->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('studio/delete/'.$studio->id) }}" class="btn-xs btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection
