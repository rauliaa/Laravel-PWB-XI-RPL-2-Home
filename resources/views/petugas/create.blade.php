@extends('template.master')

@section('title', 'Tambah Petugas')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Petugas</h3>
      </div>
      <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username">
            @error('username')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password">
            @error('password')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input name="nama_petugas" type="text" class="form-control @error('nama_petugas') is-invalid @enderror" id="nama_petugas" placeholder="Masukkan Nama Petugas">
            @error('nama_petugas')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="level">Level</label>
            <select name="level" class="form-control @error('level') is-invalid @enderror" id="level">
              <option value="admin">Admin</option>
              <option value="petugas">Petugas</option>
            </select>
            @error('level')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="card-footer">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
