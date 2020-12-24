@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h4>Ichiraku was waiting for</h4><br />
                    {{ __('You are logged in!') }} <br />
                    
                    
                    <a href="{{ route('item.index') }}" class="back"> Items </a>
                    &nbsp;
                    <a href="{{ route('ramen.index') }}" class="back"> New Orders </a>
                    &nbsp;
                    <a href="{{ route('ramen.history') }}" class="back"> All Orders </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
