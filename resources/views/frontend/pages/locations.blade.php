@extends('frontend.layouts.master')
@section('title', 'Our Locations')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">FRANCHISE </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Our Locations</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Team Single Start -->
    <!-- <div class="page-team-single bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                   
                    <div class="team-member-image">
                        <figure class="image-anime reveal">
                            <img src="images/team-2.jpg" alt="">
                        </figure>
                    </div>
                  
                </div>

                <div class="col-lg-6">
                   
                    <div class="team-member-content">
                       
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Takeaway Unit</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Takeaway Unit</h2>

                        </div>
                      
                        <div class="member-content-body wow fadeInUp" data-wow-delay="0.4s">

                            <table class="table table-bordered">

                                <tr>
                                    <th>
                                        Space :
                                    </th>
                                    <td>
                                        110-200 Sq. Ft.
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Machinery 7 Equipment :
                                    </th>
                                    <td>
                                        04 Lakhs
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Interior & Furniture :
                                    </th>
                                    <td>
                                        01-02 Lakhs
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Initial Raw Materials :
                                    </th>
                                    <td>
                                        02-2.5 Lakhs
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Franchise FEE :
                                    </th>
                                    <td>
                                        4 Lakhs + GST
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Opening Day Expenses :
                                    </th>
                                    <td>
                                        01 Lakh
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Total Investment :
                                    </th>
                                    <td>
                                        Starting from 9 Lakhs
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ROI :
                                    </th>
                                    <td>
                                        14–18 Months
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Royalty :
                                    </th>
                                    <td>
                                        2%
                                    </td>
                                </tr>

                            </table>
                        </div>
                    


                    </div>
                  
                </div>


                <div class="col-lg-6">
                
                    <div class="team-member-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Cafe With Sitting</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Cafe With Sitting</h2>

                        </div>
                        <div class="member-content-body wow fadeInUp" data-wow-delay="0.4s">

                            <table class="table table-bordered">

                                <tr>
                                    <th>
                                        Space :
                                    </th>
                                    <td>
                                        500-700 Sq. Ft.
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Machinery 7 Equipment :
                                    </th>
                                    <td>
                                        04 Lakhs
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Interior & Furniture :
                                    </th>
                                    <td>
                                        04-06 Lakhs
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Initial Raw Materials :
                                    </th>
                                    <td>
                                        02-2.5 Lakhs
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Franchise FEE :
                                    </th>
                                    <td>
                                        4 Lakhs + GST
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Opening Day Expenses :
                                    </th>
                                    <td>
                                        01 Lakh
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Total Investment :
                                    </th>
                                    <td>
                                        Starting from 14 Lakhs
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ROI :
                                    </th>
                                    <td>
                                        14–18 Months
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Royalty :
                                    </th>
                                    <td>
                                        2%
                                    </td>
                                </tr>

                            </table>
                        </div>
                       


                    </div>
                   
                </div>
                <div class="col-lg-6">
                    <div class="team-member-image">
                        <figure class="image-anime reveal">
                            <img src="images/team-2.jpg" alt="">
                        </figure>
                    </div>
                   
                </div>
            </div>
        </div>
    </div> -->
    <!-- Page Team Single End -->

    <section class="franchise-network bg-section">

        <div class="container">

            <div class="section-heading">
                <span>EXPAND WITH US ACROSS INDIA</span>
                <h2>Join Our Successful Franchise Network</h2>
            </div>

            <div class="franchise-wrapper">

                <!-- Left -->
                <div class="franchise-sidebar">

                    <div class="state-item active" data-state="Punjab"
                        data-locations="Chandigarh University, Sector 35C, Mohali Phase 3B2">

                        <div class="state-header">
                            <h4>Punjab</h4>
                            <span>3 Locations</span>
                        </div>

                    </div>

                    <div class="state-item" data-state="Haryana" data-locations="Gurugram, Faridabad">

                        <div class="state-header">
                            <h4>Haryana</h4>
                            <span>2 Locations</span>
                        </div>

                    </div>

                    <div class="state-item" data-state="Himachal" data-locations="Shimla">

                        <div class="state-header">
                            <h4>Himachal Pradesh</h4>
                            <span>1 Location</span>
                        </div>

                    </div>

                </div>

                <!-- Right -->
                <div class="franchise-map-area">

                    <div class="india-map">

                        <div class="map-state punjab active-state">
                            Punjab
                        </div>

                        <div class="map-state haryana">
                            Haryana
                        </div>

                        <div class="map-state himachal">
                            Himachal
                        </div>

                    </div>

                    <div class="location-popup">

                        <h3 id="stateName">Punjab</h3>

                        <ul id="locationList">

                            <li>Chandigarh University</li>
                            <li>Sector 35C</li>
                            <li>Mohali Phase 3B2</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection