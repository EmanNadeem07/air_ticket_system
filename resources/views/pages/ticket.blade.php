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

    <style media="print">
        body {
            background-color: #fff;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: none;
        }

        .ticket {
            box-shadow: none;
            border: 1px solid #000;
        }
    </style>

    <body>

        <div class="container">
            <div class="ticket">
                <div class="ticket-header">
                    <h2>Airplane Ticket</h2>
                </div>

                <div class="flight-details">
                    <div class="ticket-info">
                        <h5 class="passenger-info">Passenger: {{ $booking->name }}</h5>
                        <h5 class="flight-info">Flight: XYZ123</h5>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Departure:</strong> {{ $booking->flight->from }}</p>
                            <p><strong>Departure Time:</strong> 09:00 AM</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Arrival:</strong> {{ $booking->flight->to }}</p>
                            <p><strong>Arrival Time:</strong> 02:00 PM</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Date:</strong> 20th Dec 2023</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Gate:</strong> A23</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Number of seats</strong> {{ $booking->seats }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Seat : </strong> 13B</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Class: </strong>{{ $booking->class }}</p>
                        </div>
                        <div class="col">
                            <p><strong>Baggage: </strong>1 piece, 20kg</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Total amount: </strong> RS : {{ $booking->amount }}</p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary" onclick="printTicket()">Print Ticket</button>
                </div>
            </div>
        </div>
        <script>
            function printTicket() {
                window.print();
            }
        </script>
    @endsection
