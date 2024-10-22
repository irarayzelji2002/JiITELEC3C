<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ji_bill;
use Carbon\Carbon;

class Ji_billController extends Controller
{
    public function showForm()
    {
        return view('bill.billForm');
    }

    public function submitForm(Request $request)
    {
        // Validate form inputs
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'middleInitial' => 'required|string|max:2',
            'email' => 'required|email|max:255',
            'contactNo' => 'required|digits:11',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'zip' => 'required|numeric|digits:4',
            'noOfWatts' => 'required|numeric',
            'subType' => 'required|in:Residential,Industrial,Commercial',
            'disconnection' => 'nullable|in:0,1',
            'latePayment' => 'nullable|in:0,1',
        ], [
            // Custom error messages
            'middleInitial.max' => 'The :attribute must be 1 or 2 characters only.',
            'zip.digits' => 'The :attribute must be a number of 4 digits.',
        ], [
            // Custom attribute names
            'firstname' => 'first name',
            'lastname' => 'last name',
            'middleInitial' => 'middle initial',
            'contactNo' => 'contact number',
            'zip' => 'ZIP code',
            'noOfWatts' => 'number of kilowatts',
            'subType' => 'subscription type',
            'latePayment' => 'late payment',
        ]);

        // Find if there is existing same firstname, lastname, createdAt
        $found_bill = Ji_bill::where('firstname', 'firstname')
            ->where('lastname', 'lastname')
            ->whereDate('created_at', Carbon::today())
            ->latest() // Orders the results by created_at descending
            ->first();

        // Check if the bill exists
        if ($found_bill) {
            return redirect()->back()->withInput()->withErrors(['genErr' => 'You have already add and compute billing today. Check your existing billing.']);
        }
        // Calculate room price
        $subTypePrices = [
            'Residential' => 2.75,
            'Industrial' => 3.75,
            'Commercial' => 4.25
        ];

        $subType = $request->input('subType');
        $noOfWatts = $request->input('noOfWatts');
        $energyCharge = $subTypePrices[$subType];
        $energyCharge = $energyCharge * $noOfWatts;

        // Create a new bill with room price and total price
        $disconnection = $request->input('disconnection') == 1 ? 500 : 0;
        $latePayment = $request->input('latePayment') == 1 ? $energyCharge * $subTypePrices[$subType] : 0;
        $validatedData['energyCharge'] = $energyCharge;
        $validatedData['disconnection'] = $disconnection;
        $validatedData['latePayment'] = $latePayment;

        $totalBill = $energyCharge + $disconnection + $latePayment;
        $validatedData['created_at'] = Carbon::now();
        $validatedData['totalBill'] = $totalBill;
        $bill = Ji_bill::create($validatedData);

        return view('bill.billDetails', [
            'data' => $bill,
        ]);
    }

    public function showCheckBillForm() {
        return view('bill.checkBillForm');
    }

    public function submitCheckBillForm(Request $request)
    {
        // Validate form inputs
        $validatedData= $request->validate([
            'irjFirstName' => 'required|string|max:255',
            'irjLastName' => 'required|string|max:255',
            'irjCheckinDate' => 'required|date',
        ], [], [
            // Custom attribute names
            'irjFirstName' => 'first name',
            'irjLastName' => 'last name',
            'irjCheckinDate' => 'check-in date'
        ]);

        // Find the bill that matches the validated data
        $bill = Ji_bill::where('irjFirstName', $validatedData['irjFirstName'])
            ->where('irjLastName', $validatedData['irjLastName'])
            ->where('irjCheckinDate', $validatedData['irjCheckinDate'])
            ->latest() // Orders the results by created_at descending
            ->first();

        // Check if the bill exists
        if (!$bill) {
            return redirect()->back()->withInput()->withErrors(['bill' => 'Bill not found.']);
        }

        // Calculate room price
        $roomPrices = [
            'Standard' => 1500,
            'Deluxe' => 3000,
            'Suite' => 4500
        ];

        $roomType = $bill['irjRoomType'];
        $roomPrice = $roomPrices[$roomType];
        $totalPrice = $roomPrice * $bill['irjNoOfDays'];

        // Pass data to the view
        return view('bill.checkBillForm', ['data' => $bill]);
    }
}
