<!-- Here all the records are read and diplayed -->
<!-- Route used is /ramen -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')
<h1 class="text-center">ALL ITEMS</h1>
<div class="container">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">CATEGORY</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
     @foreach($items as $item)
            <tr>
                <th scope="row">{{ $item['item_id'] }}</th>
                <td>{{ $item['item_name'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td>{{ $item['itemCategory'] }}</td>
                <td><form action="{{ route('item.destroy', $item['item_id']) }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger">DELETE</button>
                </form></td>
            </tr>
            @endforeach
  </tbody>
</table>
</div> 
@endsection