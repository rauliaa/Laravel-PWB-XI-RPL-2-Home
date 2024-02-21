@extends('template.master')

@section('title', 'Edit Petugas')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Petugas</h3>
      </div>
      <form action="{{ route('petugas.update', ['petuga' => $petuga->id_petugas]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="id_petugas">ID Petugas</label>
            <input name="id_petugas" type="text" class="form-control" id="id_petugas" value="{{ $petuga->id_petugas }}" readonly>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $petuga->username }}">
            @error('username')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password Baru">
            @error('password')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input name="nama_petugas" type="text" class="form-control @error('nama_petugas') is-invalid @enderror" id="nama_petugas" value="{{ $petuga->nama_petugas }}">
            @error('nama_petugas')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="level">Level</label>
            <select name="level" class="form-control @error('level') is-invalid @enderror" id="level">
              <option value="admin" {{ $petuga->level == 'admin' ? 'selected' : '' }}>Admin</option>
              <option value="petugas" {{ $petuga->level == 'petugas' ? 'selected' : '' }}>Petugas</option>
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
