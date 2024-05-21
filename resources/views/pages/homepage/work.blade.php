<section class="work-wrap">
    <div class="work-content">
        <h1 class="work-title">Work With Us</h1>
        <hr class="underline center">
        <span class="work-overtitle">Explore your opportunities</span>

        <div id="product1" style="background:#fff" class="modalbox about-work-modal lity-hide">
            <div class="bg-effect"></div>
            <h1 class="modal-title">Company driver</h1>
            <div class="modal-center">
                <div class="application-form">
                    <div class="container">
                        <form method="POST" action="{{ route('application.send') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input required type="text" class="form-control" placeholder="First Middle Last"
                                            name="fullname" id="fullname">
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
                                        <input type="text" class="form-control" name="previous-address1-how-long"
                                            placeholder="2 yrs" id="previous-address1-how-long">
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
                                        <input required type="text" class="form-control" name="social" id="social"
                                            placeholder="xxx-xx-xxxx">
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
                                        <input type="text" class="form-control" name="contact-relation" placeholder=""
                                            id="contact-relation">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="form-group">
                                        <label for="emergency-contact-address">Contact Address</label>
                                        <input type="text" class="form-control" name="emergency-contact-address"
                                            placeholder="(Street) (City) (State,Zip)" id="emergency-contact-address">
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
                                        <input required type="date" class="form-control" name="drivers-expiration"
                                            placeholder="" id="drivers-expiration">
                                    </div>
                                </div>
                            </div>


                            <h2 class="application-form-heading">Drivers Experience</h2>

                            <div class="row">
                                <div class="col-xl-2">
                                    <div class="form-group">
                                        <label for="drivers-equipment">Equipment Type</label>
                                        <input required type="text" class="form-control" name="drivers-equipment"
                                            placeholder="" id="drivers-equipment">
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
                                <div class="radio-wrap">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" required name="denied" id="contact-preference"
                                                value="Yes">Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="denied" id="contact-preference" value="No">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row application-footer">
                                <label for="contact-preference">Has any license, permit or privilage
                                    ever been
                                    suspended or revoked?</label>
                                <div class="radio-wrap">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" required name="revoked" id="contact-preference"
                                                value="Yes">Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="revoked" id="contact-preference" value="No">No
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row application-footer">
                                <label for="contact-preference chb-agree">I certify that I have authorized West Express
                                    LLC to
                                    perform my Driving Record (MVR) check as a requirement for the position I am
                                    applying for</label>
                                <div class="radio" style="text-align: center;">
                                    <label style="margin-left:5px; color:black;">
                                        <input style="margin-right: 1rem;" type="checkbox" required name="accept"
                                            id="contact-preference" value="accept">I agree
                                    </label>
                                </div>
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
        <div id="product2" style="background:#fff" class="modalbox operator-modal lity-hide">
            <div class="bg-effect"></div>
            <h1 class="modal-title">Owner operator</h1>
            <div class="modal-center">
                <div class="application-form">
                    <div class="container">
                        <form method="POST" action="{{ route('application.send') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input required type="text" class="form-control" placeholder="First Middle Last"
                                            name="fullname" id="fullname">
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
                                        <input type="text" class="form-control" name="previous-address1-how-long"
                                            placeholder="2 yrs" id="previous-address1-how-long">
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
                                        <input required type="text" class="form-control" name="social" id="social"
                                            placeholder="xxx-xx-xxxx">
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
                                        <input type="text" class="form-control" name="contact-relation" placeholder=""
                                            id="contact-relation">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="form-group">
                                        <label for="emergency-contact-address">Contact Address</label>
                                        <input type="text" class="form-control" name="emergency-contact-address"
                                            placeholder="(Street) (City) (State,Zip)" id="emergency-contact-address">
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
                                        <input required type="date" class="form-control" name="drivers-expiration"
                                            placeholder="" id="drivers-expiration">
                                    </div>
                                </div>
                            </div>
                            <h2 class="application-form-heading">Drivers Experience</h2>

                            <div class="row">
                                <div class="col-xl-2">
                                    <div class="form-group">
                                        <label for="drivers-equipment">Equipment Type</label>
                                        <input required type="text" class="form-control" name="drivers-equipment"
                                            placeholder="" id="drivers-equipment">
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
                                <div class="radio-wrap">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" required name="denied" id="contact-preference"
                                                value="Yes">Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="denied" id="contact-preference" value="No">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row application-footer">
                                <label for="contact-preference">Has any license, permit or privilage
                                    ever been
                                    suspended or revoked?</label>
                                <div class="radio-wrap">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" required name="revoked" id="contact-preference"
                                                value="Yes">Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="revoked" id="contact-preference" value="No">No
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row application-footer">
                                <label for="contact-preference chb-agree">I certify that I have authorized West Express
                                    LLC to
                                    perform my Driving Record (MVR) check as a requirement for the position I am
                                    applying for</label>
                                <div class="radio" style="text-align: center;">
                                    <label style="margin-left:5px; color:black;">
                                        <input style="margin-right: 1rem;" type="checkbox" required name="accept"
                                            id="contact-preference" value="accept">I agree
                                    </label>
                                </div>
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

        <div class="work-cards">

            <div class="work-card driver">
                <div class="bg-effect-driver"></div>
                <h1 class="card-title">Company driver</h1>
                <p class="card-text">Achieve the change towards greatness<br />
                    We don’t offer you a job, we offer you a career. Make that important move today, apply
                    online or in person, and enjoy being a part of West Express Team. Achieve what looked
                    impossibile – advance into owner operator quickly thru our equipment rental and lease
                    programs.</p>
                <a href="#product1" class="btn btn--gradient btn--xlrg" data-lity>
                    <span class="btn__text">Apply</span>
                </a>
            </div>
            <div class="work-card operator">
                <div class="bg-effect-operator"></div>
                <h1 class="card-title">Owner operator</h1>
                <p class="card-text">Flexibility and ease of being your own boss- go where you want, when you want. Our
                    superior dispatch options will give you that priceless privilege to enjoy what You do and to
                    be well compensated for it. Opportunity is here, given to You by West Express.
                </p>
                <a href="#product2" class="btn btn--gradient btn--xlrg" data-lity>
                    <span class="btn__text">Apply</span> </a>
            </div>
        </div>
    </div>
</section>