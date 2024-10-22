@extends('layout.app')
@section('title', 'Student Registration Success')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bill.css') }}" />
@endsection
@section('content')
    <section class="bill-details" id="bill-details">
        @if (isset($data))
            <div class="d-flex justify-content-center bill-form-cont">
                <div class="card bill-details-card">
                    <div class="card-body">
                        <div class="title-cont">
                            <h3 class="card-title bill-details-title playfair-display-black success">
                                You have successfully added a bill!
                            </h3>
                            <p class="card-text bill-p playfair-display-regular light-grey">
                                You may close this tab.
                            </p>
                        </div>
                        <div class="details">
                            <h4 class="card-text bill-details-title playfair-display-black">Bill Details</h4>

                            <!-- Personal Information -->
                            <h6 class="card-text bill-details-title playfair-display-black">Guest Information</h6>
                            <div class="detail">
                                <div class="playfair-display-semibold">Customer Name</div>
                                <div> {{ $data['lastname'] }}, {{ $data['firstname'] }} {{ $data['middleInitial'] }}.</div>
                            </div>
                            <div class="detail">
                                <div class="playfair-display-semibold">Email</div>
                                <div>{{ $data['email'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="playfair-display-semibold">Contact Number</div>
                                <div>{{ $data['contactNo'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="playfair-display-semibold">Address</div>
                                <div>{{ $data['street'] }}, {{ $data['city'] }}, {{ $data['province'] }},
                                    {{ $data['country'] }}, {{ $data['zip'] }}</div>
                            </div>

                            <!-- Subscription Information -->
                            <h6 class="card-text bill-details-title playfair-display-black">Subscription Information
                            </h6>
                            <div class="detail">
                                <div class="playfair-display-semibold">No. of Kilowatts</div>
                                <div>{{ $data['noOfWatts'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="playfair-display-semibold">Subscription Type</div>
                                <div>{{ $data['subType'] }}
                                    ({{ $data['subType'] == 'Residential'
                                        ? 'Php 2.75 per KW'
                                        : ($data['subType'] == 'Industrial'
                                            ? 'Php 3.75 per KW'
                                            : ($data['subType'] == 'Commercial'
                                                ? 'Php 4.25 per KW'
                                                : '')) }})
                                </div>
                            </div>
                            <div class="detail">
                                <div class="playfair-display-semibold">Disconnection Charge</div>
                                <div>{{ 'Php ' . number_format($data['disconnection'], 2) }}</div>
                            </div>
                            <div class="detail">
                                <div class="playfair-display-semibold">Late Payment Charge</div>
                                <div>{{ 'Php ' . number_format($data['latePayment'], 2) }}</div>
                            </div>

                            <!-- Bill -->
                            <h6 class="card-text bill-details-title playfair-display-black">Bill
                            </h6>
                            <div class="detail">
                                <div class="playfair-display-semibold">Energy Charge</div>
                                <div>{{ 'Php ' . number_format($data['energyCharge'], 2) }}</div>
                            </div>
                            <div class="detail">
                                <div class="playfair-display-semibold">Total Bill</div>
                                <div>{{ 'Php ' . number_format($data['totalBill'], 2) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="d-flex justify-content-center bill-form-cont">
                <div class="card bill-details-card">
                    <div class="card-body">
                        <div class="title-cont">
                            <h3 class="card-title bill-details-title playfair-display-black error">
                                An error occurred when reserving.
                            </h3>
                            <p class="card-text bill-p playfair-display-regular light-grey">
                                Please add a bill again by clicking the button below.
                            </p>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-primary btn-v" href="{{ route('bill-form') }}" role="button">
                                Add and Compute Billing
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
