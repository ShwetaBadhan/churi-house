<div class="page-reserve-table bg-section light-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Career Opportunities</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">
                        Explore exciting opportunities and grow with a passionate team
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-7">
                <!-- Reserve Table Form Start -->
                <div class="reserve-table-form wow fadeInUp" data-wow-delay="0.2s">
                    <form id="careerForm" action="{{ route('career.store') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Full Name*</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Full Name"
                                    required>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Email Address*</label>
                                <input type="email" name="email" class="form-control" placeholder="example@gmail.com"
                                    required>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Phone Number*</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number"
                                    pattern="[0-9]{10}" maxlength="10"
                                    title="Please enter a valid 10-digit phone number" required>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Position Applied For*</label>
                                <select name="position" class="form-control form-select" required>
                                    <option value="">Select Position</option>
                                    <option value="Restaurant Manager">Restaurant Manager</option>
                                    <option value="Chef">Chef</option>
                                    <option value="Barista">Barista</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Years of Experience*</label>
                                <input type="number" name="experience" class="form-control"
                                    placeholder="Enter Experience" min="0" required>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Current Location*</label>
                                <input type="text" name="location" class="form-control"
                                    placeholder="Enter Current Location" required>
                            </div>


                            <div class="col-md-12">
                                <button type="submit" id="submitBtn" class="btn-default">
                                    <span>Apply Now</span>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- Reserve Table Form End -->
            </div>

            <div class="col-lg-5">
                <!-- Reserve Table Content Start -->
                <div class="reserve-table-content wow fadeInUp" data-wow-delay="0.4s">

                    <!-- Section Title Start -->
                    <div class="section-title">
                        <p align="justify">
                            We're always looking for passionate, talented, and dedicated individuals to join our team.
                            Explore exciting career opportunities and take the next step in your professional journey
                            with us.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Career Info Start -->
                    <div class="reserve-table-info">

                        <!-- Career Info Item Start -->
                        <div class="reserve-table-info-item">
                            <h3>Why Join Us?</h3>
                            <p align="justify">Work in a collaborative environment that values growth, innovation, and
                                excellence in
                                hospitality.</p>
                        </div>
                        <!-- Career Info Item End -->



                        <!-- Career Info Item Start -->
                        <div class="reserve-table-info-item">
                            <h3>Recruitment Contact</h3>
                            <p>Email: <a href="mailto:careers@churihouse.com">careers@churihouse.com</a></p>
                            <p>Phone: <a href="tel:+911234567890">+91 12345 67890</a></p>
                        </div>
                        <!-- Career Info Item End -->

                    </div>
                    <!-- Career Info End -->

                </div>
                <!-- Reserve Table Content End -->
            </div>
        </div>
    </div>
</div>