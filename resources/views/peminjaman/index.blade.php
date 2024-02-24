@extends('layout.main')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pinjaman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Pinjaman</li>
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
                <h3 class="card-title">Data Pinjaman</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="mb-3">
                  <a href="{{ route('pinjaman.create') }}" class="btn btn-primary">Tambah Pinjaman</a>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>UserID</th>
                    <th>BukuID</th>
                    <th>TanggalPemijaman</th>
                    <th>TanggalPengembalian</th>
                    <th>StatusPinjaman</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($pinjaman as $pinjaman)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pinjaman->Judul }}</td>
                        <td>{{ $pinjaman->Penulis }}</td>
                        <td>{{ $pinjaman->Penerbit }}</td>
                        <td>{{ $pinjaman->TahunTerbit }}</td>
                        <td>
                            <a href="{{ route('pinjaman.edit', $pinjaman->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pinjaman.destroy', $pinjaman->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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