<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function showForm()
    {
        return view('reservation.reservationForm');
    }

    public function submitForm(Request $request)
    {
        // Validate form inputs
        $validatedData = $request->validate([
            'irjFirstName' => 'required|string|max:255',
            'irjLastName' => 'required|string|max:255',
            'irjEmail' => 'required|email|max:255',
            'irjContactNo' => 'required|digits:11',
            'irjAddress' => 'required|string|max:255',
            'irjCheckinDate' => 'required|date|after_or_equal:today',
            'irjRoomType' => 'required',
            'irjNoOfDays' => 'required|numeric|min:1|max:365',
            'irjNoOfGuests' => 'required|numeric|min:1|max:1000',
            'irjSpecialRequest' => 'nullable|string|max:255'
        ], [
            // Custom error messages
            'irjCheckinDate.after_or_equal' => 'The :attribute must be today or a future date.',
            'irjContactNo.digits' => 'The contact number must be a number of 11 digits.',
            'irjNoOfDays.max' => 'The :attribute must not exceed 365 days',
            'irjNoOfGuests.max' => 'The :attribute must not exceed 1000 guests'
        ], [
            // Custom attribute names
            'irjFirstName' => 'first name',
            'irjLastName' => 'last name',
            'irjEmail' => 'email',
            'irjContactNo' => 'contact number',
            'irjAddress' => 'address',
            'irjCheckinDate' => 'check-in date',
            'irjRoomType' => 'room type',
            'irjNoOfDays' => 'number of days',
            'irjNoOfGuests' => 'number of guests',
            'irjSpecialRequest' => 'special request'
        ]);

        // Calculate room price
        $roomPrices = [
            'Standard' => 1500,
            'Deluxe' => 3000,
            'Suite' => 4500
        ];

        $roomType = $request->input('irjRoomType');
        $roomPrice = $roomPrices[$roomType];
        $totalPrice = $roomPrice * $request->input('irjNoOfDays');

        // Pass data to the view
        return view('reservation.reservationDetails', [
            'data' => $validatedData,
            'roomPrice' => $roomPrice,
            'totalPrice' => $totalPrice
        ]);
    }
}
