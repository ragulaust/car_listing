@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Car') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('cars') }}" enctype="multipart/form-data">
                            @csrf
{{--                            Name--}}
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

{{--                            Model--}}
                            <div class="row mb-3">
                                <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model') }}</label>

                                <div class="col-md-6">
                                    <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="name" autofocus>

                                    @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

{{--                            Mileage--}}
                            <div class="row mb-3">
                                <label for="mileage" class="col-md-4 col-form-label text-md-end">{{ __('Mileage') }}</label>

                                <div class="col-md-6">
                                    <input id="mileage" type="text" class="form-control @error('mileage') is-invalid @enderror" name="mileage" value="{{ old('mileage') }}" required autocomplete="name" autofocus>

                                    @error('mileage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

{{--                            Hex Code--}}
                            <div class="row mb-3">
                                <label for="hex_code" class="col-md-4 col-form-label text-md-end">{{ __('Hex Code') }}</label>

                                <div class="col-md-6">
                                    <input id="hex_code" type="text" class="form-control @error('hex_code') is-invalid @enderror" name="hex_code" value="{{ old('hex_code') }}" required autocomplete="name" autofocus>

                                    @error('hex_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

{{--                            Year--}}
                            <div class="row mb-3">
                                <label for="year" class="col-md-4 col-form-label text-md-end">{{ __('Year') }}</label>
                                <div class="col-md-6">
                                    <select name="year" id="year" class="form-control form-select" required>
                                        @for ( $year=1900 ;$year<=2022 ; $year++)
                                  <option value="<?=$year;?>"><?=$year;?></option>
                                @endfor
                                    </select>

                                    @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

 {{--                            File Upload--}}
                            <div class="row mb-3">
                                <label for="upload_file" class="col-md-4 col-form-label text-md-end">{{ __('Car Image') }}</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="upload_file" id="upload_file" multiple/>
                                    @error('upload_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                    <a href="{{ url('cars') }}" class="btn btn-danger">
                                        {{ __('Cancel') }}
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
