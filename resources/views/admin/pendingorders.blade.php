@extends('admin.layouts.template')
@section('page_title')
Pending Orders - E-Commerce
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Pending Orders</h4>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>User Id</th>
                    <th>Shipping Information</th>
                    <th>Product Id</th>
                    <th>Quantity</th>
                    <th>Total Will Pay</th>
                    <th>Action</th>
                </tr>
                @foreach ($pending_orders as $order)
                <tr>
                    <td>{{ $order->user_id }}</td>
                    <td>
                        <ul>
                            <li>Phone Number - {{ $order->phoneNumber }}</li>
                            <li>City - {{ $order->shipping_city }}</li>
                            <li>Postal Code - {{ $order->shipping_postalcode }}</li>
                        </ul>
                    </td>
                    <td>{{ $order->product_id }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td><a href="" class="btn btn-success">Confirm Now</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection