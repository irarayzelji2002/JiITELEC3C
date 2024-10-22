@extends('layout.app')
@section('title', 'Bill Form')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bill.css') }}" />
@endsection
@section('content')
    <section class="bill" id="bill">
        <div class="d-flex justify-content-center bill-form-cont">
            <div class="card bill-card">
                <div class="card-body">
                    <h2 class="card-title bill-title playfair-display-black">Meralco Billing Form</h2>
                    <form class="bill-form" action="{{ route('billing-submit') }}" method="POST">
                        @csrf
                        <!-- Personal Information -->
                        <h5 class="card-title bill-subtitle playfair-display-black">Personal Information</h5>

                        <div class="row">
                            <div class="col-12">
                                <span class="playfair-display-semibold">Customer Name</span>
                                <span class="text-danger">*</span>
                            </div>

                            <div class="form-group col-xl-4 col-md-12">
                                <label class="playfair-display-semibold" for="lastname" hidden>
                                    Last Name
                                </label>
                                @error('lastname')
                                    <span class="text-danger err-msg-top">{{ $message }}</span>
                                @enderror
                                <input class="form-control @error('lastname') is-invalid @enderror" type="text"
                                    id="lastname" name="lastname" maxlength="255" value="{{ old('lastname') }}"
                                    placeholder="First Name">
                                <small id="lastnameHelp" class="form-text text-muted">Last Name</small>
                            </div>
                        </div>

                        <div class="form-group col-xl-4 col-md-12">
                            <label class="playfair-display-semibold" for="firstname" hidden>
                                First Name
                            </label>
                            @error('firstname')
                                <span class="text-danger err-msg-top">{{ $message }}</span>
                            @enderror
                            <input class="form-control @error('firstname') is-invalid @enderror" type="text"
                                id="firstname" name="firstname" maxlength="255" value="{{ old('firstname') }}"
                                placeholder="Last Name">
                            <small id="firstnameHelp" class="form-text text-muted">First Name</small>
                        </div>

                        <div class="form-group col-xl-4 col-md-12">
                            <label class="playfair-display-semibold" for="middleInitial" hidden>
                                Middle Initial
                            </label>
                            @error('middleInitial')
                                <span class="text-danger err-msg-top">{{ $message }}</span>
                            @enderror
                            <input class="form-control @error('middleInitial') is-invalid @enderror" type="text"
                                id="middleInitial" name="middleInitial" maxlength="255" value="{{ old('middleInitial') }}"
                                placeholder="Middle Initial">
                            <small id="middleInitialHelp" class="form-text text-muted">Middle Initial</small>
                        </div>
                </div>

                <div class="form-group">
                    <label class="playfair-display-semibold" for="email">
                        Email
                        <span class="text-danger">*</span>
                        @error('email')
                            <span class="text-danger err-msg">{{ $message }}</span>
                        @enderror
                    </label>
                    <input class="form-control @error('email') is-invalid @enderror" type="text" id="email"
                        name="email" maxlength="255" value="{{ old('email') }}" placeholder="sample@gmail.com">
                    {{-- type="email" --}}
                </div>

                <div class="form-group">
                    <label class="playfair-display-semibold" for="contactNo">
                        Contact Number
                        <span class="text-danger">*</span>
                        @error('contactNo')
                            <span class="text-danger err-msg">{{ $message }}</span>
                        @enderror
                    </label>
                    <input class="form-control @error('contactNo') is-invalid @enderror" type="text" id="contactNo"
                        name="contactNo" maxlength="11" value="{{ old('contactNo') }}" placeholder="09xxxxxxxxx">
                </div>

                <div class="row">
                    <div class="col-12">
                        <span class="playfair-display-semibold">Address</span>
                        <span class="text-danger">*</span>
                    </div>

                    <div class="form-group col-xl-7 col-md-12">
                        <label class="playfair-display-semibold" for="street" hidden>
                            Building number, Street, and Barangay
                        </label>
                        @error('street')
                            <span class="text-danger err-msg-top">{{ $message }}</span>
                        @enderror
                        <input class="form-control @error('street') is-invalid @enderror" type="text" id="street"
                            name="street" maxlength="255" value="{{ old('street') }}" placeholder="Street">
                        <small id="streetHelp" class="form-text text-muted">Building number, Street, and Barangay</small>
                    </div>

                    <div class="form-group col-xl-5 col-md-12">
                        <label class="playfair-display-semibold" for="city" hidden>
                            City
                        </label>
                        @error('city')
                            <span class="text-danger err-msg-top">{{ $message }}</span>
                        @enderror
                        <input class="form-control @error('city') is-invalid @enderror" type="text" id="city"
                            name="city" maxlength="255" value="{{ old('city') }}" placeholder="City">
                        <small id="cityHelp" class="form-text text-muted">City</small>
                    </div>

                    <div class="form-group col-xl-5 col-md-12">
                        <label class="playfair-display-semibold" for="province" hidden>
                            Province
                        </label>
                        @error('province')
                            <span class="text-danger err-msg-top">{{ $message }}</span>
                        @enderror
                        <input class="form-control @error('province') is-invalid @enderror" type="text" id="province"
                            name="province" maxlength="255" value="{{ old('province') }}" placeholder="Province">
                        <small id="province" class="form-text text-muted">Province</small>
                    </div>

                    <div class="form-group col-xl-5 col-md-12">
                        <label class="playfair-display-semibold" for="country" hidden>
                            Country
                        </label>
                        @error('country')
                            <span class="text-danger err-msg-top">{{ $message }}</span>
                        @enderror
                        <input class="form-control @error('country') is-invalid @enderror" type="text" id="country"
                            name="country" maxlength="255" value="{{ old('country') }}" placeholder="Sample Country">
                        <small id="country" class="form-text text-muted">Country</small>
                    </div>

                    <div class="form-group col-xl-2 col-md-12">
                        <label class="playfair-display-semibold" for="zip" hidden>
                            Zip
                        </label>
                        @error('zip')
                            <span class="text-danger err-msg-top">{{ $message }}</span>
                        @enderror
                        <input class="form-control @error('zip') is-invalid @enderror" type="number" id="zip"
                            name="zip" maxlength="4" value="{{ old('zip') }}" placeholder="XXXX">
                        <small id="zip" class="form-text text-muted">ZIP</small>
                    </div>
                </div>

                <!-- Subscription Information -->
                <h5 class="card-title bill-subtitle playfair-display-black">Subscription Information</h5>

                <div class="form-group">
                    <label class="playfair-display-semibold" for="noOfWatts">
                        No. of Kilowatts
                        <span class="text-danger">*</span>
                        @error('noOfWatts')
                            <span class="text-danger err-msg">{{ $message }}</span>
                        @enderror
                    </label>
                    <input class="form-control @error('noOfWatts') is-invalid @enderror" type="number" id="noOfWatts"
                        name="noOfWatts" maxlength="255" value="{{ old('noOfWatts') }}" placeholder="">
                </div>

                <div class="form-group">
                    <label class="playfair-display-semibold">
                        Subscription Type
                        <span class="text-danger">*</span>
                        @error('subType')
                            <span class="text-danger err-msg">{{ $message }}</span>
                        @enderror
                    </label><br>
                    <div class="d-flex">
                        <div class="form-check form-check-inline flex-fill">
                            <input class="form-check-input" type="radio" id="residential" name="subType"
                                value="Residential" {{ old('subType', 'Residential') == 'Residential' ? 'checked' : '' }}>
                            <label class="form-check-label playfair-display-regular" for="residential">
                                Residential (Php 2.75 per KW)
                            </label>
                        </div>
                        <div class="form-check form-check-inline flex-fill">
                            <input class="form-check-input" type="radio" id="industrial" name="subType"
                                value="Industrial" {{ old('subType') == 'Industrial' ? 'checked' : '' }}>
                            <label class="form-check-label playfair-display-regular" for="industrial">
                                Industrial (Php 3.75 per KW)
                            </label>
                        </div>
                        <div class="form-check form-check-inline flex-fill">
                            <input class="form-check-input" type="radio" id="commercial" name="subType"
                                value="Commercial" {{ old('subType') == 'Commercial' ? 'checked' : '' }}>
                            <label class="form-check-label playfair-display-regular" for="commercial">
                                Commercial (Php 4.25 per KW)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="playfair-display-semibold">
                        Other Charges
                    </label><br>
                    <div class="d-flex">
                        @error('disconnection')
                            <span class="text-danger err-msg">{{ $message }}</span>
                        @enderror
                        <div class="form-check form-check-inline flex-fill">
                            <input class="form-check-input" type="checkbox" id="disconnection" name="disconnection"
                                value="1" {{ old('disconnection') != 0 ? 'checked' : '' }}>
                            <label class="form-check-label playfair-display-regular" for="disconnection">
                                Disconnection (Php 500.00)
                            </label>
                        </div>
                        @error('latePayment')
                            <span class="text-danger err-msg">{{ $message }}</span>
                        @enderror
                        <div class="form-check form-check-inline flex-fill">
                            <input class="form-check-input" type="checkbox" id="latePayment" name="latePayment"
                                value="1" {{ old('latePayment') != 0 ? 'checked' : '' }}>
                            <label class="form-check-label playfair-display-regular" for="latePayment">
                                Late Payment (30% of the Energy Charge)
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Compute Button -->
                <div class="d-flex justify-content-center">
                    @error('genErr')
                        <span class="text-danger err-msg-top">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn-primary btn-red btn-reg">Add and Compute
                        Billing</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
