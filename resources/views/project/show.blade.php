@extends('layouts.app')
@section('title', 'Our Projects')
@section('content')
    <div class="content-section about-page-section">
        <div class="container">
            <h2 class="text-center text-uppercase">
                <span class="orange-txt">
                    {{ $project->project_title ?? '' }}
                </span>
            </h2>
            <div class="border-creative text-center">
                <img src="{{ asset('assets/imgs/borders/border.png') }}" alt="" />
            </div>

            <div class="project-details">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <ul class="no-margin no-padding">
                            <li>
                                <span class="orange-txt">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    Date :
                                </span>
                                {{ $project->finished_date ?? '' }}
                            </li>
                            <li>
                                <span class="orange-txt">
                                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                    Area :
                                </span>
                                {{ $project->project_area ?? '' }}
                            </li>

                            <li>
                                <span class="orange-txt">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    Location :
                                </span>
                                {{ $project->project_location ?? '' }}
                            </li>
                            <li>
                                <span class="orange-txt">
                                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                    Status
                                </span>
                                {{ $project->project_status ?? '' }}
                            </li>

                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                    target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <p>
                            {!! $project->description ?? '' !!}
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div id="amazingslider-wrapper-1" class="project-slider"
                            style="display:block;position:relative;max-width:100%;margin:0px 0 93px;">
                            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;width:100%;">
                                <ul class="amazingslider-slides" style="display:none;">
                                    @php
                                        $values = explode(',', $project->project_gallery);
                                    @endphp
                                    @foreach ($values as $photo)
                                        <li>
                                            <img src="{{ $photo ?? '' }}" />
                                        </li>
                                    @endforeach
                                </ul>
                                <ul class="amazingslider-thumbnails" style="display:none;">
                                    @php
                                        $values = explode(',', $project->project_gallery);
                                    @endphp
                                    @foreach ($values as $photo)
                                        <li>
                                            <img src="{{ $photo ?? '' }}" />
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="container">
            <hr>
            <h2 class="text-center text-uppercase font-second-head">Related <span class="orange-txt">Projects</span></h2>
            <div class="border-creative text-center"><img src="assets/imgs/borders/border.png" alt="" /></div>
            <div class="row other-row">
                <div id="owl-demo" class="owl-carousel owl-carousel-3 owl-theme wow fadeIn owl-loaded owl-drag"
                    data-wow-duration="900ms" data-wow-delay="250ms">
                    @foreach ($projects as $project)
                        <div class="item">
                            <div>
                                <div class="grid cs-style-3">
                                    <div class="figure">
                                        <div class="overlay-div montserrat">
                                            <div class="linkss">
                                                <a href="{{ route('projects.show', $project->id) }}">
                                                    <span>
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <img src="{{ $project->main_photo ?? '' }}" class="img-fluid" alt="img04"
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                        <div class="figcaption">
                                            <div class="heading montserrat">
                                                <h6>
                                                    {{ $project->project_title ?? '' }}
                                                </h6>
                                            </div>
                                            <div class="news-detls">
                                                <ul class="no-margin no-padding montserrat">
                                                    <li>
                                                        <i class="fa fa-home" aria-hidden="true"></i>
                                                        {{ $project->project_status ?? '' }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                        {{ $project->finished_date ?? '' }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
