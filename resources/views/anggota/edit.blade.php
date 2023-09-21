@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Anggota</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail Anggota</li>
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
              <h3 class="card-title">Ubah Data Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('anggota.update', $anggota[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">ID Anggota</label>
                  <input type="text" disabled name="id" id="nama" class="form-control @error('id_anggota') is-invalid @enderror " placeholder="Masukan Id" value="{{ $anggota[0]->id }}">
                </div>
                @error('id_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="kode_anggota">Kode Anggota</label>
                  <input type="text" name="kode_anggota" id="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" placeholder="Masukan Kode" value="{{ $anggota[0]->kode_anggota }}">
                </div>
                @error('kode_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama_anggota" id="nama"  class="form-control @error('nama_anggota') is-invalid @enderror" placeholder="Masukan Nama" value="{{ $anggota[0]->nama_anggota }}">
                </div>
                @error('nama_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="custom-select" name="jk_anggota"  class="form-control @error('jk_anggota') is-invalid @enderror" >
                        <option selected disabled>{{ $anggota[0]->jk_anggota }}</option>
                        <option value="LAKI LAKI">LAKI LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                  </div>
                  @error('jk_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="custom-select" name="jurusan_anggota"  class="form-control @error('jurusan_anggota') is-invalid @enderror">
                            <option selected disabled>{{ $anggota[0]->jurusan_anggota }}</option>
                            <option value="RPL">RPL</option>
                            <option value="DPIB">DPIB</option>
                            <option value="TKJ">TKJ</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TEI">TEI</option>
                        </select>
                    </div>
                    @error('jurusan_anggota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>No Telepon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" name="no_telp_anggota" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan Angka" value="{{$anggota[0]->no_telp_anggota }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat_anggota" placeholder="Masukan alamat">{{$anggota[0]->alamat_anggota}}</textarea>
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
