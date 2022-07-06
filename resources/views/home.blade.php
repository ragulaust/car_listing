@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Car Listing') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
                <div class="card-header mb-3 pb-0">
                    {{ __('Cars')}}
                    <div class="card-actions float-end">
                        <a class=" " href="{{url('cars/create')}}">Create</a>
                    </div>
            </div>
            <x-message />
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Mileage</th>
                        <th>Color</th>
                        <th>Year</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $value )

                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->model}}</td>
                        <td>{{$value->mileage}}</td>
                        <td style="background:{{ $value->hex_code }};"></td>
                        <td>{{$value->year}}</td>
                        <td>
                            <a href="{{ url('cars') }}/{{ $value->id }}"
                                class="btn btn-primary">Edit</a>
                            <form  action="{{url('cars')}}/{{ $value->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
