@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Faq's
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>FAQ</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Faq's</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <section class="faq-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="faq-content">
                        <div class="section-title">
                            <span>Ask Question</span>
                            <h2>Frequently Asked Questions</h2>
                            <p>Veniam quis nostrud exercitation ullamco laboris nist aute irure dolor in reprehenderit in voluptate velit esse nulla pariatur excepteur sint occaecat aboris nisi ut aliquip.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            @if(isset($data) && !empty($data))
                                @php $i = '1';  @endphp
                                @foreach( $data AS $data )
                                
                                    <li class="accordion-item">
                                        <a class="accordion-title <?= ($i == '1' ?'active':''); ?>" href="javascript:void(0)">
                                            <i class="flaticon-plus"></i>
                                            {{ $data->title}}
                                        </a>
                                        <p class="accordion-content <?= ($i == '1' ?'show':''); ?>">{!! $data->discription !!}</p>
                                    </li>

                                @php $i++  @endphp
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
            <div class="faq-contact">
                <div class="section-title">
                    <h2>Do You Have Any Questions?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="faq-contact-form">
                    <form id="contactForm" action="{{ route('front.contact_store') }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                    <span></span>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    
    
    $(document).ready(function () {
        var form = $('#contactForm');
        $('.kt-form__help').html('');
        form.submit(function(e) {
            $('.help-block').html('');
            $('.m-form__help').html('');
            $.ajax({
                url : form.attr('action'),
                type : form.attr('method'),
                data : form.serialize(),
                dataType: 'json',
                async:false,
                success : function(json){
                    
                    if(json.code == 200){
                        toastr.success('Record Insertd successfully.', 'Success');
                        $("#contactForm").trigger("reset");
                    }else{
                        toastr.error('Faild To Insert Record !.', 'Error');
                    }
                },
                error: function(json){
                    if(json.status === 422) {
                        e.preventDefault();
                        var errors_ = json.responseJSON;
                        $('.kt-form__help').html('');
                        $.each(errors_.errors, function (key, value) {
                            $('.'+key).html(value);
                        });
                    }
                }
            });
        });
    });


</script>
@endsection
