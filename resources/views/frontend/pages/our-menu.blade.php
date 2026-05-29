@extends('frontend.layouts.master')
@section('title', 'Our Menu')
@section('content')


    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our menu</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our menu</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Menu Start -->
    <div class="page-menu bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <!-- Our Menu Tab Start -->
                        <div class="our-menu-tab wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Sidebar Our Menu Nav start -->
                            <div class="our-menu-tab-nav">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="first-tab" data-bs-toggle="tab"
                                            data-bs-target="#first" type="button" role="tab" aria-selected="true"><img
                                                src="images/icon-menu-tab-primary-1.svg" alt="">Beverages</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="second-tab" data-bs-toggle="tab"
                                            data-bs-target="#second" type="button" role="tab"
                                            aria-selected="false"><img src="images/icon-menu-tab-primary-2.svg"
                                                alt="">Snacks & Starters</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third"
                                            type="button" role="tab" aria-selected="false"><img
                                                src="images/icon-menu-tab-primary-3.svg" alt="">Fast Food</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="fourth-tab" data-bs-toggle="tab"
                                            data-bs-target="#fourth" type="button" role="tab"
                                            aria-selected="false"><img src="images/icon-menu-tab-primary-4.svg"
                                                alt="">Italian</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="fifth-tab" data-bs-toggle="tab" data-bs-target="#fifth"
                                            type="button" role="tab" aria-selected="false"><img
                                                src="images/icon-menu-tab-primary-4.svg" alt="">Cafe
                                            Specials</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sixth-tab" data-bs-toggle="tab" data-bs-target="#sixth"
                                            type="button" role="tab" aria-selected="false"><img
                                                src="images/icon-menu-tab-primary-4.svg" alt="">Street Food / Quick
                                            Bites</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="seventh-tab" data-bs-toggle="tab"
                                            data-bs-target="#seventh" type="button" role="tab"
                                            aria-selected="false"><img src="images/icon-menu-tab-primary-4.svg"
                                                alt="">Healthy Options</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="ninth-tab" data-bs-toggle="tab"
                                            data-bs-target="#ninth" type="button" role="tab"
                                            aria-selected="false"><img src="images/icon-menu-tab-primary-4.svg"
                                                alt="">Breakfast / Light Meals</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Our Menu Nav End -->

                            <!-- Menu Box Start -->
                            <div class="tab-content" id="myTabContent">

                                <!-- === TAB 1: Beverages === -->
                                <div class="tab-pane fade show active" id="first" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="our-menu-list">
                                                <!-- CHAI -->
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chai.svg" alt="Adrak Chai"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Adrak Chai</h3><span>149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Traditional ginger-infused black tea, brewed fresh for a
                                                                warming, spicy kick.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chai.svg" alt="Chocolate Chai">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Chocolate Chai</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Rich cocoa blended with aromatic chai spices for a decadent
                                                                twist.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chai.svg" alt="Rose Chai"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Rose Chai</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fragrant rose essence paired with classic masala chai for a
                                                                floral delight.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chai.svg" alt="Elaichi Chai">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Elaichi Chai</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Cardamom-spiced tea with a soothing, aromatic finish.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chai.svg" alt="Masala Chai">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Masala Chai</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Authentic blend of black tea with cinnamon, cloves, ginger,
                                                                and black pepper.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chai.svg" alt="Paan Chai"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paan Chai</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Unique fusion of betel leaf flavors with traditional chai
                                                                spices.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chai.svg" alt="Kesar Chai"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Kesar Chai</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Premium saffron-infused chai with a luxurious golden hue and
                                                                subtle sweetness.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chai.svg" alt="Gurh Chai"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Gurh Chai</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Traditional chai sweetened with organic jaggery for a rich,
                                                                earthy taste.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- HOT MILK -->
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-milk.svg" alt="Hot Milk"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Hot Milk</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Warm, comforting milk served plain or with your choice of
                                                                flavor.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-milk.svg" alt="Elachi Kaadni Milk">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Elachi Kaadni Milk</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Slow-simmered milk infused with cardamom for a traditional
                                                                kaadni-style drink.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-milk.svg" alt="Gurh Hot Milk">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Gurh Hot Milk</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Hot milk sweetened with pure jaggery, perfect for chilly
                                                                evenings.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-milk.svg" alt="Kesar Hot Milk">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Kesar Hot Milk</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Creamy hot milk elevated with premium saffron strands.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-milk.svg" alt="Elachi Hot Milk">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Elachi Hot Milk</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Warm milk flavored with aromatic green cardamom pods.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- COLD COFFEE -->
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg"
                                                                alt="Classic Cold Coffee"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Classic Cold Coffee</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Chilled espresso blended with milk and ice for a refreshing
                                                                treat.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg"
                                                                alt="Strong Cold Coffee"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Strong Cold Coffee</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Extra-bold espresso blend for coffee lovers who prefer an
                                                                intense kick.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg"
                                                                alt="Chocolate Cold Coffee"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Chocolate Cold Coffee</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Cold coffee fused with rich cocoa powder and chocolate syrup.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg"
                                                                alt="Chocolate With Ice Cream"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Chocolate With Ice Cream</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Cold coffee topped with a scoop of vanilla ice cream and
                                                                chocolate drizzle.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg"
                                                                alt="Caramel Cold Coffee"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Caramel Cold Coffee</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Smooth cold coffee swirled with buttery caramel sauce.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg"
                                                                alt="Hazelnut Cold Coffee"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Hazelnut Cold Coffee</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Cold coffee infused with roasted hazelnut syrup for a nutty
                                                                finish.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg"
                                                                alt="CH Spl. Cold Coffee"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>CH Spl. Cold Coffee</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Our signature cold coffee blend with a secret mix of flavors
                                                                and toppings.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- HOT COFFEE -->
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg" alt="Hot Coffee">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Hot Coffee</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Classic brewed coffee served hot, perfect for any time of
                                                                day.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg" alt="Black Coffee">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Black Coffee</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Pure, unsweetened espresso for a clean, bold coffee
                                                                experience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg" alt="Strong Coffee">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Strong Coffee</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Double-shot espresso for those who need an extra energy
                                                                boost.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg" alt="Caramel Coffee">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Caramel Coffee</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Hot coffee enhanced with sweet caramel notes and a hint of
                                                                vanilla.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg" alt="Chocolate Coffee">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Chocolate Coffee</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mocha-style hot coffee with rich cocoa and steamed milk.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg" alt="Hazelnut Coffee">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Hazelnut Coffee</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Hot coffee infused with aromatic hazelnut syrup for a cozy
                                                                treat.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-coffee.svg"
                                                                alt="Hand Beaten Coffee"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Hand Beaten Coffee</h3><span>129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Traditional frothy coffee prepared by hand-beating for
                                                                authentic texture.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- LASSI -->
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-lassi.svg" alt="Sweet Lassi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Sweet Lassi</h3><span>₹99</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Classic yogurt-based drink blended with sugar and a pinch of
                                                                cardamom.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-lassi.svg" alt="Masala Lassi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Masala Lassi</h3><span>₹109</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Savory lassi tempered with roasted cumin, black salt, and
                                                                fresh mint.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-lassi.svg" alt="Mango Lassi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Mango Lassi</h3><span>149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Creamy yogurt blended with ripe Alphonso mango pulp for a
                                                                tropical refreshment.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-lassi.svg" alt="Strawberry Lassi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Strawberry Lassi</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh strawberries pureed with yogurt and a touch of honey.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- SHAKES -->
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Vanilla Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Vanilla Shake</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Smooth vanilla ice cream blended with milk for a timeless
                                                                favorite.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Strawberry Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Strawberry Shake</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh strawberries blended with creamy vanilla ice cream.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Butterscotch Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Butterscotch Shake</h3><span>₹169</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Rich butterscotch sauce swirled into a creamy vanilla shake.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Blackcurrant Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Blackcurrant Shake</h3><span>₹169</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Tangy blackcurrant syrup blended with ice cream for a vibrant
                                                                twist.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Kitkat Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Kitkat Shake</h3><span>₹169</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crunchy Kitkat pieces blended into a chocolate-vanilla shake.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Oreo Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Oreo Shake</h3><span>₹169</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Classic Oreo cookies crushed and blended into a creamy
                                                                chocolate shake.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Thick Shakes">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Thick Shakes</h3><span>₹209</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Extra-creamy, ultra-thick shakes available in multiple
                                                                flavors.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg"
                                                                alt="Belgian Chocolate Shake"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Belgian Chocolate Shake</h3><span>₹209</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Premium Belgian chocolate blended for an indulgent, rich
                                                                experience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Mix Fruit Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Mix Fruit Shake</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh seasonal fruits blended with yogurt and honey for a
                                                                healthy treat.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg"
                                                                alt="American Nuts Shake"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>American Nuts Shake</h3><span>₹209</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Assorted nuts blended with vanilla ice cream for a
                                                                protein-rich shake.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Malai Rabri Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Malai Rabri Shake</h3><span>₹209</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Traditional rabri with creamy malai blended into a decadent
                                                                shake.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-shake.svg" alt="Whey Protein Shake">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Whey Protein Shake</h3><span>₹209</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Post-workout shake with whey protein, banana, and honey.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- MOJITO & BEVERAGES -->
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-mojito.svg" alt="Masala Lemonade">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Masala Lemonade</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Refreshing lemonade infused with roasted cumin, black salt,
                                                                and mint.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-mojito.svg" alt="Lemon Ice Tea">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Lemon Ice Tea</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Chilled black tea with fresh lemon juice and a hint of honey.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-mojito.svg" alt="Classic Mojito">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Classic Mojito</h3><span>₹179</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Non-alcoholic mojito with fresh mint, lime, soda, and a touch
                                                                of sugar.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-mojito.svg" alt="Peach Mojito">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Peach Mojito</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Classic mojito elevated with sweet peach puree and fresh
                                                                basil.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-mojito.svg" alt="Watermelon Mojito">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Watermelon Mojito</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Refreshing blend of fresh watermelon juice, mint, lime, and
                                                                soda.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-mojito.svg"
                                                                alt="Blue Curacao Mojito"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Blue Curacao Mojito</h3><span>₹179</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Vibrant blue mojito with citrus notes and a tropical finish.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-mojito.svg"
                                                                alt="Green Apple Mojito"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Green Apple Mojito</h3><span>129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crisp green apple juice muddled with mint, lime, and
                                                                sparkling water.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-mojito.svg" alt="Blue Berry Mojito">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Blue Berry Mojito</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mixed blueberries blended with mint, lime, and soda for a
                                                                berry blast.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- === TAB 2: Snacks & Starters === -->
                                <div class="tab-pane fade" id="second" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="our-menu-list">
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="Veg Momos"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Steam Veg Momos</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Steamed dumplings filled with fresh vegetables, served with
                                                                spicy Schezwan chutney.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="Chicken Momos">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Steam Paneer Momos</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Tender paneer-filled dumplings, steamed to perfection with
                                                                aromatic herbs.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="Paneer Tikka">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Tandoori Veg Momos</h3><span>199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Marinated vegetable cubes grilled with capsicum and onions in
                                                                tandoor.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="Chicken Tikka">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Tandoori Paneer Momos</h3><span>229</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Boneless paneer marinated in yogurt and spices,
                                                                charcoal-grilled for smoky flavor.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="Garlic Bread">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Garlic Bun</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crispy bread toasted with garlic butter, herbs, and melted
                                                                mozzarella.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg"
                                                                alt="Cheesy Garlic Bread"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Bun Tikki</h3><span>₹179</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Extra cheesy version with double mozzarella and oregano
                                                                seasoning.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="French Fries">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Round Cheese Garlic</h3><span>₹99</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Golden crispy fries seasoned with sea salt, served with
                                                                ketchup or mayo.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="Peri Peri Fries">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Calzone Cheese</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crispy fries tossed in spicy peri-peri sauce with herbs and
                                                                lemon zest.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="Potato Wedges">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Tikka Stuffed Garlic</h3><span>₹119</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Thick-cut potato wedges roasted with rosemary, garlic, and
                                                                paprika.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-snack.svg" alt="Spring Rolls">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Stuffed Sweetcorn Garlic</h3><span>₹139</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crispy rolls filled with shredded vegetables, served with
                                                                sweet chili sauce.</p>
                                                        </div>
                                                    </div>
                                                </div>





                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- === TAB 3: Fast Food === -->
                                <div class="tab-pane fade" id="third" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="our-menu-list">
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-burger.svg" alt="Veg Burger">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Burger with Fries</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Spiced vegetable patty with lettuce, tomato, onion, and
                                                                special sauce in a soft bun.</p>
                                                        </div>
                                                    </div>
                                                </div>







                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg"
                                                                alt="Grilled Sandwich"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Mexican Veg Burger with Fries</h3><span>₹139</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Multi-grain bread toasted with cheese, veggies, and herb
                                                                butter.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg"
                                                                alt="Croissant Sandwich"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Tandoori Veg Burger with Fries</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Buttery croissant filled with scrambled eggs, cheese, and
                                                                herbs.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>CH Spl. Burger with Fries</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Mexican Paneer Burger with Fries</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Tandoori Paneer Burger with Fries</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Veg Wrap</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Peri Peri Wrap</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Mexican Wrap</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Wrap</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Tikka Roll</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Mix Veg Roll</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Crispy Roll</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Veg Crispy Roll</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- === TAB 4: Italian === -->
                                <div class="tab-pane fade" id="fourth" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="our-menu-list">
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-pasta.svg" alt="Penne Arrabbiata">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Red Sauce Pasta</h3><span>₹249</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Penne pasta in spicy tomato sauce with garlic, red chili, and
                                                                basil.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-pasta.svg" alt="Creamy Alfredo">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>White Sauce Pasta</h3><span>₹269</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fettuccine in rich white sauce with parmesan, garlic, and
                                                                black pepper.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-pasta.svg" alt="Pesto Pasta">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Mix Sauce Pasta</h3><span>₹259</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh basil pesto with pine nuts, parmesan, and olive oil
                                                                tossed with pasta.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-pizza.svg" alt="Margherita Pizza">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Tandoori Sauce Pasta</h3><span>₹299</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Classic pizza with tomato sauce, mozzarella, fresh basil, and
                                                                olive oil.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-pizza.svg" alt="Veg Supreme Pizza">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Makhani Sauce Pasta</h3><span>₹349</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Loaded with bell peppers, onions, mushrooms, olives, and corn
                                                                on cheesy base.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-bread.svg" alt="Garlic Bread">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Margherita Pizza</h3><span>₹179</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crispy Italian bread topped with garlic butter and melted
                                                                mozzarella.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-soup.svg" alt="Minestrone Soup">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Farm House Pizza</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Hearty Italian soup with vegetables, beans, pasta, and herbs
                                                                in tomato broth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Caprese Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Golden Corn Pizza</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic
                                                                glaze.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Caprese Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Classic Four Season</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic
                                                                glaze.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Caprese Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Italian Sweet Pizza</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic
                                                                glaze.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Caprese Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Italian Hot & Sweet Pizza</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic
                                                                glaze.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Caprese Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>CH Special Pizza</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic
                                                                glaze.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Caprese Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Makhni Pizza</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic
                                                                glaze.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Caprese Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Kulhad Pizza</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh mozzarella, tomatoes, and basil drizzled with balsamic
                                                                glaze.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- === TAB 5: Cafe Specials === -->
                                <div class="tab-pane fade" id="fifth" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="our-menu-list">
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-churi.svg" alt="Desi Ghee Churi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Desi Ghee Churi</h3><span>₹129</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Traditional Punjabi crumbled paratha cooked in pure ghee,
                                                                served with jaggery.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-churi.svg" alt="Dry Fruit Churi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Dry Fruit Churi</h3><span>₹179</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Classic churi enriched with almonds, cashews, raisins, and
                                                                cardamom.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-churi.svg" alt="Protein Churi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Protein Churi</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Healthy twist with added whey protein, nuts, and honey for
                                                                fitness lovers.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-churi.svg" alt="Chocolate Churi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Chocolate Churi</h3><span>₹159</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Decadent churi with cocoa powder, chocolate chips, and
                                                                vanilla essence.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-churi.svg" alt="Kesar Pista Churi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Kesar Pista Churi</h3><span>₹189</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Premium churi infused with saffron and crushed pistachios for
                                                                royal taste.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-paratha.svg" alt="Aloo Paratha">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Aloo Paratha</h3><span>₹119</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Whole wheat paratha stuffed with spiced mashed potatoes,
                                                                served with curd.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-paratha.svg" alt="Paneer Paratha">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Paratha</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Soft paratha filled with crumbled paneer, onions, and green
                                                                chilies.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-toast.svg" alt="Avocado Toast">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Avocado Toast</h3><span>₹229</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Whole grain toast topped with mashed avocado, cherry
                                                                tomatoes, and feta.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-bowl.svg" alt="Buddha Bowl">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Churi Buddha Bowl</h3><span>₹249</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Quinoa, roasted veggies, chickpeas, avocado, and tahini
                                                                dressing in a bowl.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- === TAB 6: Street Food / Quick Bites === -->
                                <div class="tab-pane fade" id="sixth" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="our-menu-list">
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-maggi.svg" alt="Maggi"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Plain Maggie</h3><span>₹89</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Instant noodles cooked with veggies and spices, served hot.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-maggi.svg" alt="Cheese Maggi">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Masala Maggie</h3><span>₹119</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Classic Maggi topped with melted cheese and herbs for extra
                                                                indulgence.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chaat.svg" alt="Pani Puri"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Veggie Maggie</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crispy puris filled with spiced potatoes, chickpeas, and
                                                                tangy mint water.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chaat.svg" alt="Bhel Puri"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Tandoori Maggie</h3><span>₹89</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Puffed rice mixed with veggies, sev, tamarind chutney, and
                                                                spices.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-chaat.svg" alt="Dahi Puri"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Tadka Maggie</h3><span>99</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crispy puris topped with yogurt, chutneys, sev, and chaat
                                                                masala.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-samosa.svg" alt="Samosa"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>CH Spl. Maggie</h3><span>₹59</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Golden pastry filled with spiced potatoes and peas, served
                                                                with chutney.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-samosa.svg" alt="Paneer Samosa">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Corn & Butter Maggie</h3><span>₹79</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Crispy triangles stuffed with spiced paneer and herbs.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-corn.svg" alt="Corn Chaat"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Chilli Paneer Sandwich</h3><span>₹99</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Grilled sweet corn tossed with lime, chaat masala, and fresh
                                                                coriander.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-pav.svg" alt="Pav Bhaji"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Veggie Sandwich</h3><span>₹149</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Spiced vegetable mash served with butter-toasted pav buns and
                                                                onions.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Butter Aloo Toast</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Cheese Corn Sandwich</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Tikka Sandwich</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>All Veggie Sandwich</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Spicy Paneer Sandwich</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Diet Sandwich</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Punjabi Tadka Sandwich</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Hot & Sweet Pineapple Sandwich</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-vada.svg" alt="Vada Pav"></figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Maharaja Sandwich (3-Layer)</h3><span>₹69</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Mumbai's favorite: spiced potato fritter in a soft bun with
                                                                chutneys.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- === TAB 7: Healthy Options === -->
                                <div class="tab-pane fade" id="seventh" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="our-menu-list">
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Greek Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Peanut Corn Salad</h3><span>₹199</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Fresh cucumbers, tomatoes, olives, feta cheese, and olive oil
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-salad.svg" alt="Quinoa Salad">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Grilled Paneer Salad</h3><span>₹229</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Protein-rich quinoa with roasted veggies, chickpeas, and
                                                                lemon-tahini dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- === TAB 9: Breakfast / Light Meals === -->
                                <div class="tab-pane fade" id="ninth" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="our-menu-list">
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Aloo Paratha</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Paneer Paratha</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Mix Paratha</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Cheese Corn Paratha</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Aloo Pyaaz Paratha</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our-menu-item">
                                                    <div class="our-menu-image">
                                                        <figure><img src="images/icon-sandwich.svg" alt="Sub Sandwich">
                                                        </figure>
                                                    </div>
                                                    <div class="menu-item-body">
                                                        <div class="menu-item-title">
                                                            <h3>Dahi (In Desi Ghee = 20 Extra)</h3><span>₹219</span>
                                                        </div>
                                                        <div class="menu-item-content">
                                                            <p>Long sub roll with salami, ham, cheese, olives, and Italian
                                                                dressing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Approch Box End -->
                        </div>
                        <!-- Our Approch Tab End -->
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Page Menu End -->

@endsection
