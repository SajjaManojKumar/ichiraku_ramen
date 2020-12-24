<!-- Here all the records are read and diplayed -->
<!-- Route used is /ramen -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            All items
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Delete Item</th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td>{{ $item['item_id'] }}</td>
                <td>{{ $item['item_name'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td>{{ $item['itemCategory'] }}</td>
                <td><form action="{{ route('item.destroy', $item['item_id']) }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button>DELETE</button>
                </form></td>
            </tr>
            @endforeach
        </table>
        <a href="{{ route('item.create') }}" class="link">Add Item</a>
        &nbsp;
        <a href="{{ route('home') }}" class="back"> Home </a>
    </div>
</div>
<a href="/" class="home"> Welcome page </a>
@endsection