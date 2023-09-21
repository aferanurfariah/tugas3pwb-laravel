@extends('layouts.master')

@section('title', 'Data anggota')


@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

{{-- {{dd($anggota)}} --}}
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Anggota</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Table Data anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>id</th>
                                    <th>kode</th>
                                    <th>nama</th>
                                    <th>jenis kelamin</th>
                                    <th>jurusan</th>
                                    <th>telepon</th>
                                    <th>alamat</th>
                                    <th>Actiom</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($anggota as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->kode_anggota }}</td>
                                    <td>{{ $value->nama_anggota }}</td>
                                    <td>{{ $value->jk_anggota }}</td>
                                    <td>{{ $value->jurusan_anggota }}</td>
                                    <td>{{ $value->no_telp_anggota }}</td>
                                    <td>{{ $value->alamat_anggota }}</td>
                                    <td>
                                        <form action="{{ route('anggota.destroy', $value->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <a href="{{ route('anggota.show', $value->id) }}" class="btn-sm btn-info">Show</a>
                                        <a href="{{ route('anggota.edit', $value->id) }}" class="btn-sm btn-warning">Edit</a>
                                        <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</button>
                                        </from>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td>Data Masih Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            <a href="{{ route('anggota.create')}}" class="btn btn-sm btn-primary m-2">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>

@endsection


@push('script')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush
