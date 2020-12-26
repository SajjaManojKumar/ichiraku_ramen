<!-- Here only a perticular record is read and diplayed -->
<!-- Route used is /ramen/{id} -->
<!-- Here {id} is the id of record to be read from DB -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-dark text-white">RECEIPT</div>

                <div class="card-body text-center">
                            <p>========================</p>
                            <p class="id">Order - {{ $order->order_id}}</p>
                            <p>----------------------------------</p>
                            <p class="name">Customer - {{ $order->name }}</p>
                            <p>----------------------------------</p>
                            <p class="phoneNumber">Phone Number - {{ $order->phoneNumber }}</p>
                            <p>----------------------------------</p>
                            <p class="item">Soup - {{ $soup->item_name }} ${{ $soup->price }}</p>
                            <p>----------------------------------</p>
                            <p class="item">Noodles - {{ $noodle->item_name }} ${{ $noodle->price }}</p>
                            <p>----------------------------------</p>
                            <p class="item">Toppings - {{ $topping->item_name }} ${{ $topping->price }}</p>
                            <p>----------------------------------</p>
                            <p class="item">Total Cost - ${{ $order->totalCost }}</p>
                            <p>========================</p>
                            <button class="btn btn-lg btn-dark" onClick="window.print()">Print</button>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection