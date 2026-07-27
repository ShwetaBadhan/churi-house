<section class="ch-specials-showcase bg-section">
    <div class="container">
        <div class="section-title section-title-center mb-4">
            <h3 class="wow fadeInUp"> Our Specials</h3>
            <h2 class="text-anime-style-3" data-cursor="-opaque"> Handpicked Favorites, Crafted to Delight
            </h2>
        </div>



        <div class="ch-specials-wrapper">

            <!-- Left Menu -->
            <div class="ch-specials-list">

                <div class="ch-specials-item " data-title="Pizza"
                    data-desc="Classic pizza topped with rich mozzarella cheese, fresh tomato sauce,and aromatic herbs."
                    data-img="{{ asset('images/upload/special/Pizza.jpg') }}">
                    <span>01</span>
                    Pizza
                </div>

                <div class="ch-specials-item" data-title="Aloo Toast"
                    data-desc="Crispy toasted bread stuffed with a flavorful potato filling and served fresh."
                    data-img="{{ asset('images/upload/special/Aloo-Toast.jpg') }}">
                    <span>02</span>
                    Aloo Toast
                </div>

                <div class="ch-specials-item" data-title="Desi Ghee Churi"
                    data-desc="Traditional churi made with pure desi ghee, freshly crumbled and blended for a rich, authentic taste."
                    data-img="{{ asset('images/upload/special/churi.png') }}">
                    <span>03</span>
                    Desi Ghee Churi
                </div>

                <div class="ch-specials-item active" data-title="Chai"
                    data-desc="Aromatic, freshly brewed chai with rich flavors and comforting warmth."
                    data-img="{{ asset('images/upload/special/chai.png') }}">
                    <span>04</span>
                    Chai
                </div>

                <div class="ch-specials-item" data-title="Wrap"
                    data-desc="Freshly filled wraps packed with flavor in every bite."
                    data-img="{{ asset('images/upload/special/Wrap.jpg') }}">
                    <span>05</span>
                    Wrap
                </div>

            </div>

            <!-- Center Content -->
            <div class="ch-specials-content">

                <span class="ch-special-tag">House Favorite</span>

                <h3 id="specialTitle">Chai</h3>

                <p id="specialDesc">
                    Aromatic, freshly brewed chai with rich flavors and comforting warmth.
                </p>

                <a href="{{ route('our-menu') }}" class="btn-default btn-highlighted">
                    View Menu
                </a>

            </div>

            <!-- Right Image -->
            <div class="ch-specials-image">
                <img id="specialImage" src="{{ asset('images/upload/special/chai.png') }}" alt="">
            </div>

        </div>

    </div>
</section>