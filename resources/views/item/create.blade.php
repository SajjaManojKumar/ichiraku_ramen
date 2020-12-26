<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header text-center">{{ __('Dashboard') }}</div> --}}

                <div class="card-body p-4">
                    
                    <h1 class="text-center">Create a new item</h1><br />
                     <form action="{{ route('item.store') }}" method="POST">
                        @csrf
                    <div class="form-group row">
                        <label for="itemname" class="col-sm-2 col-form-label">Item name:</label>
                        <div class="col-sm-10">
                        <input type="text" id="itemname" name="itemname" class="form-control"  placeholder="Enter the item name">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="itemprice" class="col-sm-2 col-form-label">Item price:</label>
                        <div class="col-sm-10">
                        <input type="text" id="itemprice" name="itemprice" class="form-control"  placeholder="Enter the item price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="type">Choose the category:</label>
                        <div class="col-sm-10">
                            <select class="custom-select my-1 mr-sm-2" name="type" id="type">
                                <option value="Soup">Soup Type</option>
                                <option value="Noodles">Noodles Type</option>
                                <option value="Toppings">Toppings Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="container">
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 col-md-8">
                        <button type="submit" class="btn btn-dark ">Add Item</button>
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