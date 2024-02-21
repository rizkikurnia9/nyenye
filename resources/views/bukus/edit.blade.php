<!-- resources/views/books/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="contrainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Buku</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <a href="{{ route('books.edit', $buku->id) }}">Edit Buku</a>

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
                        </div>

                        <div class="form-group">
                            <label for="penerbit">penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="number" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}" required>
                        </div>

                        <div class="form-group">
                            <label for="tahun_terbit">Tahun Terbit</label>
                            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection