@extends('layouts.app')

@section('title')
DTPL Kelompok 6
@endsection

@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/bromolandscape.jpg') }}"></div>
    <div class="home_content">
        <div class="home_title">Pesanan Saya</div>

        @if(Session::has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="fa fa-times">close</i>
                </button>
                <span>
                    <b> Success - </b> {{ Session::get('success') }}
                </span>
            </div>
        @endif
        @if(Session::has('warning'))
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="fa fa-times">close</i>
                </button>
                <span>
                    <b> Warning - </b> {{ Session::get('warning') }}
                </span>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="fa fa-times">close</i>
                </button>
                <span>
                    <b> Error - </b> {{ Session::get('error') }}
                </span>
            </div>
        @endif
    </div>
</div>

<!-- Offers -->

<div class="offers">

    <!-- Offers -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $no => $order)
                            <tr>
                                <td>{{ $order->code }}</td>
                                <td>Rp {{ $order->total_price }}</td>
                                <td>
                                    @if($order->status == "NP")
                                        Belum dibayar
                                    @else
                                        Lunas
                                    @endif
                                </td>
                                <td>
                                    @if($order->status == "NP")
                                        <a class="btn btn-success" href="{{ url('payment/create?order_id='.$order->id) }}">bayar<span></span><span></span><span></span></a>
                                    @elseif($order->status == "PA")
                                        <a class="btn btn-primary" href="{{ url('review/create?order_id='.$order->id) }}">review<span></span><span></span><span></span></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>		
</div>

<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
@endsection
