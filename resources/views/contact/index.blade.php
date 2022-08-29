@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

    <div class="inner-header">
        <div class="pattern"></div>
        <div class="display-cell">
            <div class="container">
                <div class="col-xs-12 text-left">
                    <div class="home-builder-page-title">
                        <h1>Contact Us</h1>
                        <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Contact Us </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section about-page-section">
        <div class="container top-contact-main">
            <h2 class="text-center text-uppercase">Get in<span class="orange-txt"> touch</span></h2>
            <div class="border-creative text-center">
                <img src="{{ asset('assets/imgs/borders/border.png') }}" alt="" />
            </div>
            <div class="top-contact">
                <div class="row">
                    <div class="col-lg-4 col-md-12  no-padding">
                        <div class="col-xs-4">
                            <span class="icon-contact">
                                <i class="flaticon-placeholder-1"></i>
                            </span>
                        </div>
                        <div class="col-xs-8 no-padding">
                            <p>
                                Yangon, <br> Myanmar
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12  no-padding">
                        <div class="col-xs-4"> <span class="icon-contact"> <i class="fa fa-mobile"></i> </span></div>
                        <div class="col-xs-8 no-padding">
                            <p class="phone-mail">
                                <a href="tel:+959 76 76 70487">
                                    +959 76 76 70487
                                </a>
                                <br>
                                <a href="tel:+959 76 76 70487">
                                    +959 76 76 70487
                                </a>
                                <br>
                                <a href="tel:+959 76 76 70487">
                                    +959 76 76 70487
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12  no-padding">
                        <div class="col-xs-4"> <span class="icon-contact"> <i class="fa fa-envelope-o"></i> </span></div>
                        <div class="col-xs-8 no-padding">
                            <p class="phone-mail">
                                <a href="mailto:info@vipdesignconstruction.com" title="">
                                    info@vipdesignconstruction.com
                                </a>
                                <a href="mailto:admin@vipdesignconstruction.com" title="">
                                    admin@vipdesignconstruction.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section light-bg form-section">
            <div class="container">
                <form autocomplete="off" method="POST" action="{{ route('contact.store') }}" id="create-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                @error('email')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="message" class="form-control" cols="30" rows="10" data-error="Write your message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="help-block with-errors text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="text-center">
                                <input type="submit" value="send message" class="submit"
                                    onClick="return ajaxmailcontact();" />
                                <input type="reset" value="reset" class="reset" />
                            </div>
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id='mapkit-7453'></div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
