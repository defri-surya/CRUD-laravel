@extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
     <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

     <form method="post" action="/students">
     @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM Mahasiswa" name="nim" value="{{ old('nim') }}">
    @error('nim')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan E-mail Mahasiswa" name="email" value="{{ old('email') }}">
    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
    @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>

    </div>
  </div>
</div>
@endsection