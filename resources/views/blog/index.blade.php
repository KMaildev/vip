@extends('layouts.app')
@section('title', 'Blog')
@section('content')

    <div class="content-section about-page-section blog-bg blog-page-grid">
        <div class="container">
            <h2 class="text-center text-uppercase">
                Blog <span class="orange-txt"> Posts</span>
            </h2>
            <div class="border-creative text-center">
                <img src="{{ asset('assets/imgs/borders/border.png') }}" alt="" />
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog-in">
                            <h6 class="montserrat">
                                {{ $blog->title ?? '' }}
                            </h6>
                            <ul class="comm-date">
                                <li> {{ $blog->upload_date ?? '' }} </li>
                                <li>|</li>
                                <li> <span>by Admin</span> </li>
                            </ul>

                            <div class="img-cont">
                                <img data-enlargeable="" src="{{ $blog->media ?? '' }}" alt="VIP Design Construction"
                                    title="VIP Design Construction" class="img-fluid"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>

                            <div class="blog-text">
                                <p>
                                    {!! Str::limit($blog->description, 40) !!}
                                </p>
                            </div>

                            <div class="pull-left">
                                <a class="continue montserrat" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal_{{ $blog->id }}">
                                    READ MORE
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>

                            <div class="pull-right">
                                <div class="share2 montserrat">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                        class="icoFacebook" title="Facebook">
                                        <i class="fa fa-facebook"></i></a>
                                    <a href="#" class="icoInsta" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#" class="icoTwitter" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="modal fade" id="exampleModal_{{ $blog->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">
                                        {{ $blog->title ?? '' }}
                                    </h5>
                                </div>
                                <div class="modal-body" style="background-color: white !important;">
                                    <p style="color: black">
                                        {!! $blog->description !!}
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
