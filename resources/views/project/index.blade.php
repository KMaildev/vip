@extends('layouts.app')
@section('title', 'Our Projects')
@section('content')
    <div class="content-section news-section">
        <div class="container">
            <h2 class="text-center text-uppercase">
                Our <span class="orange-txt">Projects</span>
            </h2>
            <div class="border-creative text-center">
                <img src="{{ asset('assets/imgs/borders/border.png') }}" alt="" />
            </div>


            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <div class="portfolio logo" data-cat="logo">
                            <div class="grid-2" style="background-color: gray">
                                <figure class="effect-jazz">
                                    <img src="{{ $project->main_photo ?? '' }}" class="img-fluid" alt="img04"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    <figcaption>
                                        <h2>
                                            <i class="fa fa-search" aria-hidden="true">&nbsp;</i>
                                        </h2>
                                        <a href="{{ route('projects.show', $project->id) }}" title="Project Details">
                                            View more
                                        </a>
                                    </figcaption>
                                </figure>
                                <div class="clearfix"></div>
                                <div class="headl montserrat">
                                    <h6 style="color: white;">
                                        {{ $project->project_title ?? '' }}
                                    </h6>
                                    <p style="color: white;">
                                        {{ $project->project_location ?? '' }}
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
