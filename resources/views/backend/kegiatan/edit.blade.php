@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card border-0 shadow">
        <div class="card-body">
          <form action="{{route('backend.kegiatan.update', $activity->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success')}}
          </div>
          @endif
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Kode Kegiatan</label>
                    <input type="text" name="code_activity" id="" 
                           value="{{$activity->code_activity}}" 
                           class="form-control" 
                           placeholder="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nama Kegiatan</label>
                    <input type="text" name="name" id="" value="{{$activity->name}}" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Tanggal</label>
                    <input type="date" name="date" id="" value="{{$activity->date}}" class="form-control" placeholder="" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Status</label>
                    <input type="text" name="status" id="" value="{{$activity->status}}" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="text" name="price" id="" value="" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Informasi</label>
                    <textarea name="information" id="" value="" class="form-control">{{$activity->information}}</textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">capacity</label>
                    <input type="number" name="capacity" id="" value="" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Image</label>
                    <input type="file" name="images" id="" value="" class="form-control" placeholder="" >
                </div>
              </div>
            </div>
            <div class="pt-2 mb-2">
              <button type="submit" class="btn btn-outline-info">
                  Save
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection