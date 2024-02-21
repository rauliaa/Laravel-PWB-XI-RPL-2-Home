@extends('template.master')

@section('title', 'Detail Petugas')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detail Petugas</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="id_petugas">ID Petugas</label>
          <input type="text" class="form-control" id="id_petugas" value="{{ $petuga->id_petugas }}" readonly>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" value="{{ $petuga->username }}" readonly>
        </div>
        <div class="form-group">
          <label for="nama_petugas">Nama Petugas</label>
          <input type="text" class="form-control" id="nama_petugas" value="{{ $petuga->nama_petugas }}" readonly>
        </div>
        <div class="form-group">
          <label for="level">Level</label>
          <input type="text" class="form-control" id="level" value="{{ $petuga->level }}" readonly>
        </div>
      </div>
      <div class="card-footer">
        <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection
