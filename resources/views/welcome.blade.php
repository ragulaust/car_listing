{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body> --}}
    @extends('layouts.app')
    @section('content')
<div class="container pb-5">
    <div class="row">
        @if ($cars->count())
        @foreach ($cars as $value )
        {{-- {{dd($value)}} --}}
        <div class="col-3">
            <div class="card text-black">
                <img src="data:{{$value->CarImage->filetype}};base64,{{($value->CarImage->file)}}" class="card-img-top" alt="Apple Computer" />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">{{$value->name}}</h5>
                            <p class="text-muted mb-4">{{$value->model}}</p>
                        </div>
                    <div>
                    <div class="d-flex justify-content-between">
                        <span>Year</span><span>{{$value->year}}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                    <span>Mileage</span><span>{{$value->mileage}}</span>
                    </div>
                    {{-- <div class="d-flex justify-content-between">
                    <span>Vesa Mount Adapter</span><span>$199</span>
                    </div>   --}}
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                        <span>Colors</span><span style="height:1.2rem; width:1.2rem; border-radius: 50%; background:{{$value->hex_code}};"></span>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        @else
        <h1>There is No record here</h1>
        <a href="/login">Login to add Cars</a>
        @endif



    </div>
</div>
@endsection


    {{-- <div class="container py-5">
        <div class="row text-center text-white mb-5">
            <div class="col-lg-7 mx-auto">
                <h1 class="display-4">Product List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto"> --}}
      {{-- <div class="col-md-8 col-lg-6 col-xl-4">

      </div> --}}


            {{-- </div>
        </div>
    </div> --}}
    {{-- </body>
</html> --}}
