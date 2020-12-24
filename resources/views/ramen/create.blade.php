<!-- Here new recordes are taken from user and put to DB -->
<!-- Route used is /ramen/create -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.layout')

<!-- Access to only body part of layout file -->
@section('body-content')
<div class="wrapper create-meat">
    <h1>Place new order</h1>
    <form action="{{ route('ramen.store') }}" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="phoneNumber">Your number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber">

        <label for="soup">Choose the soup:</label>
        <select name="soup" id="soup">
            @foreach($soups as $soup)
            <option value="{{ $soup['item_id'] }}">{{ $soup['item_name'] }}, {{ $soup['price'] }}</option>
            @endforeach
        </select>

        <label for="noodle">Choose the noodles:</label>
        <select name="noodle" id="noodle">
            @foreach($noodles as $noodle)
            <option value="{{ $noodle['item_id'] }}">{{ $noodle['item_name'] }}, {{ $noodle['price'] }}</option>
            @endforeach
        </select>

        <label for="topping">Choose the toppings:</label>
        <select name="topping" id="topping">
            @foreach($toppings as $topping)
            <option value="{{ $topping['item_id'] }}">{{ $topping['item_name'] }}, {{ $topping['price'] }}</option>
            @endforeach
        </select>

        <input type="submit" value="Place Order">
    </form>
</div>
@endsection