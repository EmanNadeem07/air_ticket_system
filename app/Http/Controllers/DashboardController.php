<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        try {
            $flights = Flight::all();
            return view('layout.index', compact('flights'));
        } catch (\Throwable $th) {
        }
    }
    public function bookingForm($flight_id)
    {
        try {
            $flight = Flight::findorfail($flight_id);
            return view('pages.bookingForm', compact('flight'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function storeBooking(Request $request)
    {
        try {
            DB::beginTransaction();
            $flight = Flight::findorfail($request->flight_id);
            $booking = Booking::create([
                'name' => $request->name,
                'class' => $request->class,
                'seats' => $request->seats,
                'amount' => $flight->price * $request->seats,
                'flight_id' => $flight->id,
                'user_id' => Auth::user()->id,
            ]);
            $flight->update([
                'id' => $flight->id,
                'seats' => $flight->seats - $request->seats,
            ]);
            DB::commit();
            return redirect(route('payment', $booking->id));
        } catch (\Throwable $th) {
            DB::rollback();
        }
    }
    public function showTicket($booking_id)
    {
        try {
            $booking = Booking::findorfail($booking_id);
            return view('pages.ticket', compact('booking'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function payment($booking_id)
    {
        try {
            $booking = Booking::findorfail($booking_id);
            return view('pages.payment', compact('booking'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
