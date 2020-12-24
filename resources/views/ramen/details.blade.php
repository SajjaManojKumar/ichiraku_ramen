<!-- Here only a perticular record is read and diplayed -->
<!-- Route used is /ramen/{id} -->
<!-- Here {id} is the id of record to be read from DB -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.layout')

<!-- Access to only body part of layout file -->
@section('body-content')
<div class="wrapper meat-details">
    <h1>Order - {{ $order->order_id }}</h1>
    <p class="name"><strong> Customer - {{ $order->name }} </strong></p>
    <p class="phone">Phone number - {{ $order->phoneNumber }}</p>
    <p class="item">Soup - {{ $soup->item_name }}</p>
    <p class="item">Noodle - {{ $noodle->item_name }}</p>
    <p class="item">Topping - {{ $topping->item_name }}</p>
    <p class="cost">Total Cost - {{ $order->totalCost }}</p>
</div>
<a href="/" class="home"> Welcome page </a>
@endsection