@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Petugas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Petugas</li>
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
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Petugas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                  <label for="id">ID Petugas</label>
                  <input type="text" name="id" id="id" class="form-control" placeholder="Masukan Id" value="{{ $petugas[0]->id }}" disabled>
                </div>
                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Masukan nama" value="{{ $petugas[0]->nama_petugas}}" disabled>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" name="jabatan_petugas" id="judul" class="form-control" placeholder="Masukan Jabatan" value="{{ $petugas[0]->jabatan_petugas }}" disabled>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan Angka" disabled value="{{$petugas[0]->no_telp_petugas }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat" disabled>{{$petugas[0]->alamat_petugas}}</textarea>
                </div>
            </div>
            <div class="crad-footer">
                <a href="/petugas"><button type="sumbit" class="btn btn-primary m-2">Kembali</button></a>
            </div>
              <!-- /.card-body -->

              {{-- <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> --}}
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
@endsection
