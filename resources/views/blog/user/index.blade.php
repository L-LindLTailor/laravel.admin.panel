@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            @if(session('staus'))
                            <div class="alert alert-success" role="alert">
                                {{session('status')}}
                            </div>
                            @endif
                        Welcome User
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
