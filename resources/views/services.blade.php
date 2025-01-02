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

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">
        @foreach ($services as $service)
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="{{url('/storage')}}{{'/'}}{{$service->image}}" alt="service-image">
            </div>
          
              
              <div class="ts-service-info">
                  <h3 class="service-box-title">{{$service->name}}</h3>
                  <p>{!!$service->description!!}</p>
              </div>
          
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->
    @endforeach
      

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->
@stop