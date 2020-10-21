@extends('layouts.app')

@section('content')
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card border-0">
            <div class="card-body">
              <div class="d-flex px-2 py-2">
                <div>
                <a href="{{route("register.ambil_formulir")}}" class="btn btn-info">Pendaftaran</a>
                </div>
              </div>
              <div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Kode Pendaftaran</th>
                      <th>Kode Kegiatan</th>
                      <th>Nama</th>
                      <th>Tanggal Daftar</th>
                      <th>Status</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>WOK45454</th>
                      <th>WEK545454</th>
                      <th>Shune</th>
                      <th>011019</th>
                      <th>Menunggu</th>
                      <th>
                        <a href="{{{route('register.show-register')}}}" class="btn btn-info">Tampilkan</a>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection