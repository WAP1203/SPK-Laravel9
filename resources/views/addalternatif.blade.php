@extends('layout.page')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add alternatif</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add alternatif</li>
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
                <h3 class="card-title">Add alternatif</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="kode_alternatif" class="col-sm-2 col-form-label">alternatif</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kode_alternatif" placeholder="kode_alternatif">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kriteria_1" class="col-sm-2 col-form-label">kriteria_1</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kriteria_1" placeholder="kriteria_1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kriteria_2" class="col-sm-2 col-form-label">kriteria_2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kriteria_2" placeholder="kriteria_2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kriteria_3" class="col-sm-2 col-form-label">kriteria_3</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kriteria_3" placeholder="kriteria_3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kriteria_4" class="col-sm-2 col-form-label">kriteria_4</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kriteria_4" placeholder="kriteria_4">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kriteria_5" class="col-sm-2 col-form-label">kriteria_5</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kriteria_5" placeholder="kriteria_5">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                </div> -->
                <!-- <div class="form-group row">
                    <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan">
                    </div>
                </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Create</button>
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
