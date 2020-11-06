@extends('layouts.app')

@section('content')
    <div class="container">
        <nav  aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item active" 
                    aria-current="page">
                    <li class="badge badge-info">
                        Aktif
                    </li>
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex">
                                <div>
                                    <img src="{{asset('banner/banner.png')}}" alt="" class="rounded-circle" width="80" height="80" srcset="">
                                </div>
                                <div>
                                    <h3>Discusion View Input</h3>
                                        <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum</p>
                                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-flex">
                                    <div>
                                        <img src="{{asset('banner/banner.png')}}" alt="" class="rounded-circle" width="80" height="80" srcset="">
                                    </div>
                                    <div>
                                        <h3>Discusion View Input</h3>
                                            <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum</p>
                                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection