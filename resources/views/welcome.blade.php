<!-- Welcome page or main page -->
<!-- Route used is / -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->
@extends('layouts.app')

<!-- Access to only body part of layout file -->
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">

        <!-- Image location: public/img/.. -->
        <img src='/img/ichiraku_ramen.png' alt="ramen-shop-logo">

        <!-- Title for the welcome page -->
        <div class="title m-b-md">
            The Ramen Shop
        </div>
        <!-- Button for the from page -->
        <a href="/ramen/create"> Order Now ! </a>
        <div class="menu">
            <table>
                <tr>
                    <th>Soup</th>
                    <td><strong>Price</strong></td>
                </tr>
                @foreach($soups as $soup)
                <tr>
                    <td>{{ $soup->item_name }}</td>
                    <td>{{ $soup->price }}</td>
                </tr>
                @endforeach
            </table>
            <table>
                <tr>
                    <th>Noodles</th>
                    <td><strong>Price</strong></td>
                </tr>
                @foreach($noodles as $noodle)
                <tr>
                    <td>{{ $noodle->item_name }}</td>
                    <td>{{ $noodle->price }}</td>
                </tr>
                @endforeach
            </table>
            <table>
                <tr>
                    <th>Toppings</th>
                    <td><strong>Price</strong></td>
                </tr>
                @foreach($toppings as $topping)
                <tr>
                    <td>{{ $topping->item_name }}</td>
                    <td>{{ $topping->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>

        

    </div>
</div>
@endsection
    