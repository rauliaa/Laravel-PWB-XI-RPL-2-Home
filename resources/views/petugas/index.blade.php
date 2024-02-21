@extends('template.master')

@section('title', 'Data Petugas')

@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>  
    <strong>{{ $message }}</strong> 
  </div>
@endif

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('petugas.create') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> Tambah Petugas</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Petugas</th>
              <th>Username</th>
              <th>Nama Petugas</th>
              <th>Level</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($petugas as $key => $petugasItem)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $petugasItem->id_petugas }}</td>
                <td>{{ $petugasItem->username }}</td>
                <td>{{ $petugasItem->nama_petugas }}</td>
                <td>{{ $petugasItem->level }}</td>
                <td>
                    <a href="{{ route('petugas.show', $petugasItem->id_petugas) }}" class="btn btn-sm btn-info">
                        Detail
                    </a>
                    <a href="{{ route('petugas.edit', $petugasItem->id_petugas) }}" class="btn btn-sm btn-warning">
                        Edit
                    </a>  
                    <form action="{{ route('petugas.destroy', $petugasItem->id_petugas) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger my-1">Delete</button>
                    </form>
                </td>              
              </tr>
            @empty
              <tr>
                <td colspan="6">Data Masih Kosong</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
@endsection
