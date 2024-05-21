<section class="careers-content-wrap">
    <h1 class="careers-title">Vision</h1>
    <div class="careers-content">
        <p class="careers-text">Make a difference. Love what You do. Be Successful. Build a Career. Enjoy while you do
            all of that.</p>
    </div>

    <div class="careers-values-wrap">
        <div class="careers-values">
            <h1 class="careers-values-title">Our Values</h1>
            <hr class="underline" data-aos="fade-up">
            <div class="banner-careers" data-aos="fade-up">
                <div data-aos="fade-up" data-aos-delay="50" class="banner-careers-single">
                    <span class="flaticon-locked careers-icon"></span>
                    <h2 class="banner-careers-single-title">Safety</h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="banner-careers-single">
                    <span class="flaticon-graph-3 careers-icon"></span>
                    <h2 class="banner-careers-single-title">Growth</h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="banner-careers-single">
                    <span class="flaticon-users careers-icon"></span>
                    <h2 class="banner-careers-single-title">Customers</h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="banner-careers-single">
                    <span class="flaticon-coin-7 careers-icon"></span>
                    <h2 class="banner-careers-single-title">Profit</h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="banner-careers-single">
                    <span class="flaticon-locked careers-icon"></span>
                    <h2 class="banner-careers-single-title">Safety</h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="banner-careers-single">
                    <span class="flaticon-graph-3 careers-icon"></span>
                    <h2 class="banner-careers-single-title">Growth</h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="banner-careers-single">
                    <span class="flaticon-users careers-icon"></span>
                    <h2 class="banner-careers-single-title">Customers</h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="50" class="banner-careers-single">
                    <span class="flaticon-coin-7 careers-icon"></span>
                    <h2 class="banner-careers-single-title">Profit</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="careers-cta-wrap" id="careers-cta-content">
        <div class="careers-cta-content">
            <div class="careers-cta-left">
                <h1 class="careers-cta-title" data-aos="fade-up">Apply</h1>
                <hr class="underline" data-aos="fade-up">
                <p class="careers-cta-subtitle" data-aos="fade-up">West Express
                    wants to talk to You</p>
                <p class="careers-cta-text" data-aos="fade-up">
                    Apply now online clicking below or call our office 972-787-0047 during Monday- Friday 7am to 5 pm
                    CST
                </p>
                <a data-aos="fade-up" href="#application-form" data-lity
                    class="btn careers-cta-left-btn btn--gradient btn--xlrg">
                    <span class="btn__text">APPLY NOW</span>
                </a>
                <div id="application-form" style="background:#fff" class="modalbox lity-hide">
                    <div class="bg-effect"></div>
                    <h1 class="modal-title">Application</h1>
                    <div class="modal-center">
                        <div class="application-form">
                            <div class="container">
                                <form method="POST" action="{{ route('application.send') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="fullname">Full Name</label>
                                                <input required type="text" class="form-control"
                                                    placeholder="First Middle Last" name="fullname" id="fullname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="form-group">
                                                <label for="current-address">Current Address</label>
                                                <input required type="text" class="form-control"
                                                    placeholder="(Street) (City) (State,Zip)" name="current-address"
                                                    id="current-address">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="how-long">How Long?</label>
                                                <input required type="text" class="form-control" name="how-long"
                                                    placeholder="2 yrs" id="how-long">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="form-group">
                                                <label for="previous-address1">Previous Address</label>
                                                <input type="text" class="form-control"
                                                    placeholder="(Street) (City) (State,Zip)" name="previous-address1"
                                                    id="previous-address1">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="previous-address1-how-long">How Long?</label>
                                                <input type="text" class="form-control"
                                                    name="previous-address1-how-long" placeholder="2 yrs"
                                                    id="previous-address1-how-long">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    placeholder="(555)5550-1234">
                                            </div>
                                        </div>
                                        <!--  col-xl-6   -->

                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth</label>
                                                <input type="date" class="form-control" name="dob" id="dob">
                                            </div>

                                        </div>

                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="social">Social Security #</label>
                                                <input required type="text" class="form-control" name="social"
                                                    id="social" placeholder="xxx-xx-xxxx">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="form-group">
                                                <label for="emergency-contact-name">Emergency Contact Name</label>
                                                <input type="text" class="form-control" name="emergency-contact-name"
                                                    placeholder="" id="emergency-contact-name">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="contact-relation">Relation</label>
                                                <input type="text" class="form-control" name="contact-relation"
                                                    placeholder="" id="contact-relation">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="form-group">
                                                <label for="emergency-contact-address">Contact Address</label>
                                                <input type="text" class="form-control" name="emergency-contact-address"
                                                    placeholder="(Street) (City) (State,Zip)"
                                                    id="emergency-contact-address">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="emergency-contact-phone">Phone</label>
                                                <input type="text" class="form-control" name="emergency-contact-phone"
                                                    placeholder="(555)5550-1234" id="emergency-contact-phone">
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="application-form-heading">Driver's License Information</h2>

                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div class="form-group">
                                                <label for="drivers-state">State</label>
                                                <input required type="text" class="form-control" placeholder=""
                                                    name="drivers-state" id="drivers-state">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="drivers-license">License #</label>
                                                <input required type="text" class="form-control" name="drivers-license"
                                                    placeholder="" id="drivers-license">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="drivers-type">Type</label>
                                                <input required type="text" class="form-control" name="drivers-type"
                                                    placeholder="" id="drivers-type">
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div class="form-group">
                                                <label for="drivers-expiration">Expiration Date</label>
                                                <input required type="date" class="form-control"
                                                    name="drivers-expiration" placeholder="" id="drivers-expiration">
                                            </div>
                                        </div>
                                    </div>


                                    <h2 class="application-form-heading">Drivers Experience</h2>

                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div class="form-group">
                                                <label for="drivers-equipment">Equipment Type</label>
                                                <input required type="text" class="form-control"
                                                    name="drivers-equipment" placeholder="" id="drivers-equipment">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="drivers-from">From</label>
                                                <input required type="date" class="form-control" name="drivers-from"
                                                    id="drivers-from">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="drivers-to">To</label>
                                                <input required type="date" class="form-control" name="drivers-to"
                                                    id="drivers-to">
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div class="form-group">
                                                <label for="drivers-miles">Miles</label>
                                                <input required type="text" class="form-control" name="drivers-miles"
                                                    placeholder="Approx #" id="drivers-miles">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row application-footer">
                                        <label for="contact-preference">Have you ever been denied a license, permit or
                                            privilage to operate a motor vehicle?</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="denied" id="contact-preference"
                                                    value="Yes">Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="denied" id="contact-preference" value="No">No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row application-footer">
                                        <label for="contact-preference">Has any license, permit or privilage
                                            ever been
                                            suspended or revoked?</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="revoked" id="contact-preference"
                                                    value="Yes">Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="revoked" id="contact-preference" value="No">No
                                            </label>
                                        </div>
                                    </div>

                                      <div class="row application-footer">
                                <label for="contact-preference">I certify that I have authorized West Express LLC  to perform my Driving Record (MVR) check as a requirement for the position I am applying for</label>
                            </div>
                            <div class="radio" style="text-align: center;">
                                    <label style="margin-left:5px; color:black;">
                                        <input type="checkbox" name="accept" id="contact-preference" value="accept">I agree
                                    </label>
                                </div>


                                    <div class="row">
                                        <button type="submit" name="send" href="#" style="margin: 0.3rem auto"
                                            class="btn btn--xlrg btn--gradient">
                                            <span class="btn__text btn-text">Send</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="careers-cta-right">
                <div class="careers-cta-right-container">
                    <div class="careers-cta-right-stats">
                        <div class="stat">
                            {{-- <span class="stat-number">8000+</span> --}}
                            <span class="stat-text">No forced dispatch</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">24/7</span>
                            <span class="stat-text">Support</span>
                        </div>
                        <div class="stat">
                            {{-- <span class="stat-number">200+</span> --}}
                            <span class="stat-text">Paid weekly</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-careers-wrap">
        <div class="cta-careers">
            <h1 class="cta-careers-title">Contact us</h1>
            <p class="cta-careers-text">Click bellow for West Express contact Information</p>
            <a href="{{ route('contact') }}" class="btn btn--xlrg btn--gradient">
                <span class="btn__text btn-text">Contact Us</span>
            </a>
        </div>
    </section>
</section>