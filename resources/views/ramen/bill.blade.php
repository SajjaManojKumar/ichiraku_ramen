<!-- Here only a perticular record is read and bill of that record is diplayed -->
<!-- Route used is /ramen/{id}/bill -->
<!-- Here {id} is the id of record to be read from DB -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')
<div class="wrapper meat-details">
    <h1>RECEIPT</h1>
    <p>========================</p>
    <p class="id">Order - {{ $order->order_id}}</p>
    <p>----------------------------------</p>
    <p class="name">Customer - {{ $order->name }}</p>
    <p>----------------------------------</p>
    <p class="phoneNumber">Phone Number - {{ $order->phoneNumber }}</p>
    <p>----------------------------------</p>
    <p class="item">Soup - {{ $soup->item_name }}</p>
    <p>----------------------------------</p>
    <p class="item">Noodles - {{ $noodle->item_name }}</p>
    <p>----------------------------------</p>
    <p class="item">Toppings - {{ $topping->item_name }}</p>
    <p>----------------------------------</p>
    <p class="item">Total Cost - {{ $order->totalCost }}</p>
    <p>========================</p>
</div>
<button onClick="window.print()">Print</button>
<a href="{{ route('ramen.index') }}" class="back"> Home </a>
@endsection