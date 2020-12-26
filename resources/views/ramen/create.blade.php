<!-- Here new recordes are taken from user and put to DB -->
<!-- Route used is /ramen/create -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header text-center">{{ __('Dashboard') }}</div> --}}

                <div class="card-body p-4 ">
                    
                    <h1 class="text-center">Place new order</h1><br />
                     <form action="{{ route('ramen.store') }}" method="POST">
                        @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Your name:</label>
                        <div class="col-sm-8">
                        <input type="text"  id="name" name="name" class="form-control"  placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Your number:</label>
                        <div class="col-sm-8">
                        <input type="text"  id="phoneNumber" name="phoneNumber" class="form-control"  placeholder="Enter your name">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="soup">Choose the soup:</label>
                         <div class="col-sm-8">
                        <select class="custom-select my-1 mr-sm-2" name="soup" id="soup">
                            @foreach($soups as $soup)
                            <option value="{{ $soup['item_id'] }}">{{ $soup['item_name'] }}, {{ $soup['price'] }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label " for="noodle">Choose the noodles:</label>
                        <div class="col-sm-8">
                        <select class="custom-select my-1 mr-sm-2" name="noodle" id="noodle">
                            @foreach($noodles as $noodle)
                            <option value="{{ $noodle['item_id'] }}">{{ $noodle['item_name'] }}, {{ $noodle['price'] }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="topping">Choose the toppings:</label>
                        <div class="col-sm-8">
                        <select class="custom-select my-1 mr-sm-2" name="topping" id="topping">
                            @foreach($toppings as $topping)
                            <option value="{{ $topping['item_id'] }}">{{ $topping['item_name'] }}, {{ $topping['price'] }}</option>
                            @endforeach
                        </select>
                        </div>        
                    </div>
                    <div class="container">
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 col-md-8">
                        <button type="submit" class="btn btn-dark ">Place your order</button>
                        </div>
                    </div>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection