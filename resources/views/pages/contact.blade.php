@extends('layouts.app')

@section('title', 'Contact Us | Exo-United')

@section('content')
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="{{ asset('frontend/images/01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-area">
                        <h1 class="page-title">contact us</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('site_url') }}">Home</a></li>
                                <li class="breadcrumb-item active">contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- contact-section start -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper">
                        <div class="contact-area d-flex">
                            <div class="contact-form-area">
                                <h3 class="title">{{ $get->left_title }}</h3>
                                <p>{{ $get->left_content }}</p>
                                <form class="contact-form" action="{{ route('contact.mail') }}" method="post">
                                    @csrf
                                    <div class="form-grp">
                                        <input type="text" name="contact_name" id="contact_name" placeholder="Full Name">
                                    </div>
                                    <div class="form-grp">
                                        <input type="email" name="contact_email" id="contact_email" placeholder="Email Address">
                                    </div>
                                    <div class="form-grp">
                                        <input type="tel" name="contact_phone" id="contact_phone" placeholder="Phone No">
                                    </div>
                                    <div class="form-grp">
                                        <textarea name="contact_message" id="contact_message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-grp">
                                        <input class="submit-btn" type="submit" value="sent message">
                                    </div>
                                </form>
                            </div><!-- contact-form-area end -->
                            <div class="address-area has_bg_image" data-background="{{ asset($get->right_bg_image) }}">
                                <div class="address-area-header">
                                    <h3 class="title">{{ $get->right_title }}</h3>
                                    <span>{{ $get->right_content }}</span>
                                </div>
                                <div class="contact-address">
                                    <h3 class="title">{{ $get->right_details_title }}</h3>
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fa fa-phone"></i></div>
                                            <div class="content">
                                                <p>{{ $get->right_phone_1 }}</p>
                                                <p>{{ $get->right_phone_2 }}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                            <div class="content">
                                                <p>{{ $get->right_email_1 }}</p>
                                                <p>{{ $get->right_email_2 }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

    <!-- map-section start -->
    <div class="map-section">
        <div id="map"></div>
    </div>
    <!-- map-section end -->
@endsection

@section('js')
    <!-- google map init js file -->
    <script>
        function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng({{ $get->map_latitude }}, {{ $get->map_longitude }}),
                styles: [
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
                //mapTypeId: google.maps.MapTypeId.ROADMAP
            });

        }
    </script>
    <!-- google map api -->
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&amp;callback=initMap"
            async defer></script>
@endsection
