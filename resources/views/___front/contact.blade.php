@extends('front.layout.app')

@section('title')
    Contact
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="default-dt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title129">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-product-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="contact-title">
                        <h2>Submit customer service request</h2>
                        <p>If you have a question about our service or have an issue to report, please send a request
                            and we will get back to you as soon as possible.</p>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="form-group mt-1">
                                <label class="control-label">Full Name*</label>
                                <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                        <input class="prompt srch_explore" type="text" name="sendername" id="sendername" required="" placeholder="Your Full">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <label class="control-label">Email Address*</label>
                                <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                        <input class="prompt srch_explore" type="email" name="emailaddress" id="emailaddress" required="" placeholder="Your Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <label class="control-label">Subject*</label>
                                <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                        <input class="prompt srch_explore" type="text" name="sendersubject" id="sendersubject" required="" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <div class="field">
                                    <label class="control-label">Message*</label>
                                    <textarea rows="2" class="form-control" id="sendermessage" name="sendermessage" required="" placeholder="Write Message"></textarea>
                                </div>
                            </div>
                            <button class="next-btn16 hover-btn mt-3" type="submit"
                                data-btntext-sending="Sending...">Submit Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
