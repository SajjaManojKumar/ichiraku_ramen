<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')
<div class="wrapper create-meat">
    <h1>Place new order</h1>
    <form action="{{ route('item.store') }}" method="POST">
        @csrf
        <label for="itemname">Item name:</label>
        <input type="text" id="itemname" name="itemname">
        <label for="itemprice">Item price:</label>
        <input type="text" id="itemprice" name="itemprice">
        <label for="type">Choose the category:</label>
        <select name="type" id="type">
            <option value="Soup">Soup Type</option>
            <option value="Noodles">Noodles Type</option>
            <option value="Toppings">Toppings Type</option>
        </select>

        <input type="submit" value="Add Item">
    </form>
    <a href="{{ route('item.index') }}" class="link">All Items</a>
</div>
@endsection