@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Petugas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail Petugas</li>
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
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Ubah Data Petugas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('petugas.update', $petugas[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">ID Petugas</label>
                  <input type="text" disabled name="id" id="id" class="form-control @error('id_petugas') is-invalid @enderror " placeholder="Masukan Id" value="{{ $petugas[0]->id }}">
                </div>
                @error('id_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" name="nama_petugas" id="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" placeholder="Masukan nama" value="{{ $petugas[0]->nama_petugas }}">
                </div>
                @error('nama_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="jabatan_petugas">Jabatan Petugas</label>
                  <input type="text" name="jabatan_petugas" id="judul"  class="form-control @error('jabatan_petugas') is-invalid @enderror" placeholder="Masukan Nama" value="{{ $petugas[0]->jabatan_petugas }}">
                </div>
                @error('jabatan_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <div class="form-group">
                        <label>No Telepon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" name="no_telp_petugas" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan Angka" value="{{$petugas[0]->no_telp_petugas }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat_petugas" placeholder="Masukan alamat">{{$petugas[0]->alamat_petugas}}</textarea>
                    </div>
                </div>


                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
              </div>

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
@endsection
