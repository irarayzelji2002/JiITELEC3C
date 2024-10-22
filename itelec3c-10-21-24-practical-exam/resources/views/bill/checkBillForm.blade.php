@extends('layout.app')
@section('title', 'Check Bill Form')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bill.css') }}" />
@endsection
@section('content')
    <section class="check-bill" id="check-bill">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center bill-form-cont">
                    <div class="card bill-card">
                        <div class="card-body">
                            <h2 class="card-title bill-title playfair-display-black">Check Bill</h2>
                            <form class="check-bill-form" action="{{ route('check-billing-submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <span class="playfair-display-semibold">Full Name</span>
                                        <span class="text-danger">*</span>
                                    </div>

                                    <div class="form-group col-xl-6 col-md-12">
                                        <label class="playfair-display-semibold" for="irjFirstName" hidden>
                                            First Name
                                        </label>
                                        @error('irjFirstName')
                                            <span class="text-danger err-msg-top">{{ $message }}</span>
                                        @enderror
                                        <input class="form-control @error('irjFirstName') is-invalid @enderror"
                                            type="text" id="irjFirstName" name="irjFirstName" maxlength="255"
                                            value="{{ old('irjFirstName') }}" placeholder="First Name">
                                    </div>

                                    <div class="form-group col-xl-6 col-md-12">
                                        <label class="playfair-display-semibold" for="irjLastName" hidden>
                                            Last Name
                                        </label>
                                        @error('irjLastName')
                                            <span class="text-danger err-msg-top">{{ $message }}</span>
                                        @enderror
                                        <input class="form-control @error('irjLastName') is-invalid @enderror"
                                            type="text" id="irjLastName" name="irjLastName" maxlength="255"
                                            value="{{ old('irjLastName') }}" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="playfair-display-semibold" for="irjCheckinDate">
                                        Check-in Date
                                        <span class="text-danger">*</span>
                                        @error('irjCheckinDate')
                                            <span class="text-danger err-msg">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input class="form-control @error('irjCheckinDate') is-invalid @enderror" type="date"
                                        id="irjCheckinDate" name="irjCheckinDate"
                                        value="{{ old('irjCheckinDate', date('Y-m-d')) }}">
                                </div>

                                <!-- Check Button -->
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-red btn-reg">Check</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if (isset($data))
                    <div class="d-flex justify-content-center bill-form-cont">
                        <div class="card check-bill-details-card">
                            <div class="card-body">
                                <div class="title-cont">
                                    <h3 class="card-title bill-details-title playfair-display-black success">
                                        Here is your bill details.
                                    </h3>
                                    <p class="card-text bill-p playfair-display-regular light-grey">
                                        See you on
                                        {{ \Carbon\Carbon::parse($data['irjCheckinDate'])->format('F j, Y') }}!
                                    </p>
                                </div>
                                <div class="details">
                                    <h4 class="card-text bill-details-title playfair-display-black">Bill
                                        Details</h4>

                                    <!-- Guest Information -->
                                    <h6 class="card-text bill-details-title playfair-display-black">Guest Information
                                    </h6>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Full Name</div>
                                        <div>{{ $data['irjFirstName'] }} {{ $data['irjLastName'] }}</div>
                                    </div>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Email Address</div>
                                        <div>{{ $data['irjEmail'] }}</div>
                                    </div>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Contact Number</div>
                                        <div>{{ $data['irjContactNo'] }}</div>
                                    </div>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Address</div>
                                        <div>{{ $data['irjAddress'] }}</div>
                                    </div>

                                    <!-- Room Bill Details -->
                                    <h6 class="card-text bill-details-title playfair-display-black">Room Bill
                                        Details
                                    </h6>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Check-in Date</div>
                                        <div>{{ \Carbon\Carbon::parse($data['irjCheckinDate'])->format('F j, Y') }}</div>
                                    </div>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Room Type</div>
                                        <div>{{ $data['irjRoomType'] }}</div>
                                    </div>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">No of Days</div>
                                        <div>{{ $data['irjNoOfDays'] }}</div>
                                    </div>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Number of Guests</div>
                                        <div>{{ $data['irjNoOfGuests'] }}</div>
                                    </div>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Special Request</div>
                                        <div>{{ $data['irjSpecialRequest'] ?? 'None' }}</div>
                                    </div>

                                    <!-- Payment Details -->
                                    <h6 class="card-text bill-details-title playfair-display-black">Payment Details
                                    </h6>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Room Price</div>
                                        <div>{{ '₱' . number_format($data['irjRoomPrice'], 2) }}</div>
                                    </div>
                                    <div class="detail">
                                        <div class="playfair-display-semibold">Total Price</div>
                                        <div>{{ '₱' . number_format($data['irjTotalPrice'], 2) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif ($errors->has('bill'))
                    <div class="d-flex justify-content-center bill-form-cont">
                        <div class="card check-bill-details-card">
                            <div class="card-body">
                                <div class="title-cont">
                                    <h3 class="card-title bill-details-title playfair-display-black error">
                                        {{ $errors->first('bill') }}
                                    </h3>
                                    <p class="card-text bill-p playfair-display-regular light-grey">
                                        You may reserve by clicking the button below or recheck with the correct details.
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <a class="btn btn-primary btn-red" href="{{ route('bill-form') }}" role="button">
                                        Reserve a Room
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
