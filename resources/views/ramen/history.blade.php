<!-- Here all the records are read and diplayed -->
<!-- Route used is /ramen -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            All orders
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Soup</th>
                <th>Noodles</th>
                <th>Toppings</th>
                <th>Total Cost</th>
                <th>Status</th>
            </tr>
            @foreach($ramens as $ramen)
            <tr>
                <td><a href="{{ route('ramen.bill', $ramen['order_id']) }}">{{ $ramen['order_id'] }}</a></td>
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
            @endforeach>
        </table>
        <a href="{{ route('home') }}" class="back"> Home </a>
    </div>
</div>
<a href="/" class="home"> Welcome page </a>
@endsection