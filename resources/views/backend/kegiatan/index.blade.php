@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="mb-3">
        <a href="{{route('backend.kegiatan.create')}}" class="btn btn-outline-primary">
          tambah kegiatan
      </a>
      </div>

      <div class="card border-0 shadow">
        <div class="px-3 py-3">
          <h4 class="text-muted">Master Kegiatan</h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Kode Kegiatan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Images</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              @foreach($activitys as $activity)
              <tr>
                <td>
                  <a href="{{route('backend.kegiatan.show-formEdit', $activity->id)}}" class="btn btn-outline-primary btn-sm">{{$activity->code_activity}}</a>
                </td>
                <td>{{$activity->date}}</td>
                <td>{{$activity->status}}</td>
                  <td>
                    <img src="{{asset('storage/'.$activity->images)}}" alt="" class="rounded" width="50px   " heigth="10px ">
                  </td>
                <td>

                  <a href="{{route('backend.kegiatan.delete', $activity->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                  <form action="{{route('backend.kegiatan.delete',$activity->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection