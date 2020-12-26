@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header text-center">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h1 class="text-center">Ichiraku was waiting for you..</h1><br />
                    <div class="text-center">{{ __('Welcome to the team!!') }}</div> <br />
                    <div class="container-fluid">
                        <div class="row">
                            <div class="text-center col-md-3 mt-2">
                            <a href="{{ route('item.index') }}" class="btn btn-lg btn-dark "> View Items </a>
                            </div>
                            <div class="text-center col-md-3 mt-2">
                            <a href="{{ route('item.create') }}" class="btn btn-lg btn-dark "> Add Items </a>
                            </div>
                            <div class="text-center col-md-3 mt-2 ">
                            <a href="{{ route('ramen.index') }}" class="btn btn-lg btn-dark"> New Orders </a>
                            </div>
                            <div class="text-center col-md-3 mt-2">
                            <a href="{{ route('ramen.history') }}" class="btn btn-lg btn-dark"> All Orders </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
