@extends('layouts.app')
@section('title', 'Our Company Activities')
@section('content')
    <div class="content-section services-main">
        <div class="container">
            <h2 class="text-center text-uppercase">
                Project <span class="orange-txt"> Galleries</span>
            </h2>
            <div class="border-creative text-center">
                <img src="{{ asset('assets/imgs/borders/border.png') }}" alt="" />
                <center>
                    <p>
                        Our top priority is your satisfaction.
                    </p>
                </center>
            </div>

            <div class="row py-2">
                <div class="grid-2">
                    @foreach ($activities as $activitie)
                        @php
                            $values = explode(',', $activitie->photo);
                        @endphp
                        @foreach ($values as $photo)
                            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px;">
                                <figure class="effect-jazz"
                                    style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                                    <img data-enlargeable="" src="{{ $photo }}" class="img-fluid" alt="img25"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;" />
                                </figure>
                            </div>
                        @endforeach
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <br><br>
    </div>
@endsection
@section('script')
@endsection
