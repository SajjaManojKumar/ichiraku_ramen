<!-- Here all the records are read and diplayed -->
<!-- Route used is /ramen -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')
<h1 class="text-center">ALL ORDERS</h1>
<div class="container">
<table class="table table-hover table-dark">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Soup</th>
        <th scope="col">Noodles</th>
        <th scope="col">Toppings</th>
        <th scope="col">Total Cost</th>
        <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  
                 @foreach($ramens as $ramen)
            <tr>
                <th scope="row"><a href="{{ route('ramen.bill', $ramen['order_id']) }}">{{ $ramen['order_id'] }}</a></th>
                <td><a href="{{ route('ramen.bill', $ramen['order_id']) }}">{{ $ramen['name'] }}</a></td>
                <td>{{ $ramen['phoneNumber'] }}</td>
                <td>{{ $ramen['S_item_id'] }}</td>
                <td>{{ $ramen['N_item_id'] }}</td>
                <td>{{ $ramen['T_item_id'] }}</td>
                <td>${{ $ramen['totalCost'] }}</td>
                <td>
                    @if($ramen['completed'] == 1)
                        Completed
                    @else
                        Not Completed
                    @endif
                </td>
            </tr>
            @endforeach
  </tbody>
</table>
</div> 
@endsection