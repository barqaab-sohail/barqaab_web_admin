@extends('layout.layout')
@section('content')
<!-- Banner area start -->
<div id="banner-area" class="banner-area" style="background-image:url(/project/images/banner/banner2.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Services</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div>

<!-- Banner area end -->

<section id="main-container" class="main-container pb-4">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h3 class="section-sub-title">MANAGEMENT</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row justify-content-center">
            @foreach ($management as $employee)
            <div class="col-lg-12 col-sm-6 mb-5">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                        <img loading="lazy" src="{{url('/storage')}}{{'/'}}{{$employee->picture}}" height="200"
                            alt="team-img">
                    </div>
                    <div class="ts-team-content-classic">
                        <h3 class="ts-name">{{$employee->name}}</h3>
                        <p class="ts-designation">{{$employee->designation}}</p>
                        <p class="ts-description">{!!$employee->description!!}</p>
                        <!--/ social-icons-->
                    </div>
                </div>
                <!--/ Team wrapper 1 end -->

            </div><!-- Col end -->
            @endforeach
        </div><!-- Content row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->
@stop