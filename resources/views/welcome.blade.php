<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Events</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
       <div class="d-flex flex-coloumn flex-md-row align-items-center p-3 px-md-4 bg-teal-900 border-bottom shadow-sm">
        <h3 class="my-0 mr-md-auto font-weight-normal">
            Event
        </h3>
            <nav class="my-2 my-md-0 mr-md-3">
                <a href="" class="p-2 text-dark">Login</a>
                <a href="" class="p-2 text-dark">Register</a>
            </nav>
       </div>
        <div class="nav-scroller bg-white shadow-sm">
            <nav class="nav nav-underline ml-4 py-2">
                <a href="" class="nav-link">
                    <h6 class="text-muted">Home</h6>
                </a>
                <a href="{{route('users.kegiatan.index')}}" class="nav-link">
                    <h6 class="text-muted">Kegiatan</h6>
                </a>
                <a href="" class="nav-link">
                    <h6 class="text-muted">Daftar</h6>
                </a>
            </nav>
        </div>
        <div class="jumbotron" style="background-image: url('banner/banner.png')">
            <div class="container">
                <h3 class="text-center">
                    Aplikasi Management Kegiatan
                </h3>
                <h1 class="display-3 text-center">ABV</h1>
            </div>
        </div>
            <div class="container py-3">
                <nav  aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item active" aria-current="page">
                            Home
                        </li>
                    </ol>
                </nav>
                <div class="justify-content-center">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-0">
                                <img src="{{asset('banner/undraw_date_picker_gorr.png')}}" 
                                     alt="" 
                                     class="card-img-top">
                                    <div class="card-body">
                                        <h3>Manage Event</h3>
                                        <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0">
                                <img src="{{asset('banner/undraw_mobile_payments_vftl.png')}}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h3>Manage Register</h3>
                                        <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0">
                                <img src="{{asset('banner/undraw_schedule_pnbk.png')}}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h3>Schedule Event</h3>
                                        <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-3">
                <nav  aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item active" aria-current="page">
                            Kegiatan
                        </li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card border-0">
                                <img src="{{asset('banner/undraw_date_picker_gorr.png')}}" 
                                     alt="" 
                                     class="card-img-top">
                                    <div class="card-body">
                                        <h3>Belajar Coding</h3>
                                        <p>Kegiatan Aktif </p>
                                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Active</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0">
                                <img src="{{asset('banner/undraw_date_picker_gorr.png')}}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h3>Bukber Bersama</h3>
                                        <p>Coming Soon</p>
                                        <button class="btn-lg btn-block btn-outline-success" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Non Active
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
