@extends('layouts.app')

@section('title', 'Exo-United | My Account')

@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('site_url') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">My-Account</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last dashboard-content">
                    <h2>Edit Account Information</h2>

                            <form action="{{ route('customer.profile.update', $profile->id) }}" method="post">
                                @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4 required-field">
                                            <label for="name" class="text-white">Name</label>
                                            <input type="text" class="form-control text-dark" name="name" id="name" placeholder="Enter your full name" value="{{ $profile->name }}">
                                        </div><!-- End .form-group -->

                                        <div class="form-group col-md-4 required-field">
                                            <label for="email" class="text-white">Email</label>
                                            @if ($profile->provider)
                                                <input class="form-control" type="text" name="email" value="{{ $profile->email }}" readonly>
                                                <small class="text-white">You can't change this email with social login.</small>
                                            @else
                                                <input type="email" class="form-control text-dark" name="email" id="email" placeholder="Enter your email" value="{{ $profile->email }}">
                                            @endif
                                        </div><!-- End .form-group -->
                                        <div class="form-group col-md-4 required-field">
                                            <label for="phone" class="text-white">Phone</label>
                                            <input type="text" class="form-control text-dark" name="phone" id="phone" placeholder="Enter your phone" value="{{ $profile->phone }}">
                                        </div><!-- End .form-group -->
                                    </div><!-- End .form-row -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="address_1" class="text-white">Address</label>
                                            <input type="text" class="form-control text-dark" name="address_1" id="address_1" placeholder="1234 Main St" value="{{ $profile->address_1 }}">
                                        </div><!-- End .form-group -->

                                        <div class="form-group col-md-6">
                                            <label for="address_2" class="text-white">Address 2</label>
                                            <input type="text" class="form-control text-dark" name="address_2" id="address_2" placeholder="Apartment, studio, or floor" value="{{ $profile->address_2 }}">
                                        </div><!-- End .form-group -->
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city" class="text-white">City</label>
                                            <input type="text" class="form-control text-dark" name="city" id="city" value="{{ $profile->city }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="state" class="text-white">State</label>
                                            <input type="text" class="form-control text-dark" name="state" id="state" value="{{ $profile->state }}">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="country" class="text-white">Country</label>
                                            <input type="text" class="form-control text-dark" name="country" id="country" value="{{ $profile->country }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="zip" class="text-white">Zip</label>
                                            <input type="text" class="form-control text-dark" name="zip" id="zip" value="{{ $profile->zip }}">
                                        </div>
                                    </div>
                                    <div class="mb-2"></div><!-- margin -->
                                    <div class="form-footer">
                                        <div class="form-footer-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div><!-- End .form-footer -->
                                </form>
                            </div><!-- End .col-lg-9 -->
                            @include('customer-dashboard/partials/sidebar')
                        </div><!-- End .row -->
                    </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->
    </main><!-- End .main -->
@endsection

@section('css')
    <style>
        .cmn-btn {
            background-color: transparent;
        }
    </style>
@endsection
