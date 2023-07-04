@extends('admin.dashboard.layouts.main')

@section('content')

<h3>Pembeli</h3>
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-dark table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $project->nama }}</td>
            <td>{{ $project->keterangan }}</td>
            <td>{{ $project->status }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection