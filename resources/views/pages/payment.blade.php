@extends('layout.master')
@section('content')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .ticket {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .ticket-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .flight-details {
            border-top: 1px solid #dee2e6;
            padding-top: 20px;
            margin-top: 20px;
        }

        .ticket-info {
            margin-bottom: 20px;
        }

        .passenger-info,
        .flight-info {
            margin-bottom: 15px;
        }
    </style>



    <body>

        <div class="container">
            <div class="ticket">
                <div class="ticket-header">
                    <h2>Payment</h2>
                </div>

                <div class="flight-details">
                    <div class="ticket-info">
                        <h5 class="passenger-info">Passenger: {{ $booking->name }}</h5>
                        <h5 class="flight-info">Amount: {{ $booking->amount }}</h5>
                    </div>

                    <div class="row">

                        <p><strong>Card Number</strong></p>
                        <input type="text" class="form-control" required>

                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="{{ route('showTicket', $booking->id) }}" class="btn btn-primary">Pay Now</a>
                </div>
            </div>
        </div>
    @endsection
