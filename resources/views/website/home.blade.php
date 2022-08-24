@extends('website.layouts.app')
@section('content')
    @php $sliders = $frontend_helper->getPagesByID(11); @endphp

    <div class="main-banner">
        <div class="fitness-banner">
            @forelse($sliders->navigationitems as $slider)
            <div>
                <div class="info-sideh1">
                    <div class="picture-slideshow">

                        <a href="" tabindex="-1">
                            <img src="{{asset('uploads/photo_gallery/'. $slider->file ) }}" class="img-responsive img_slideh1" alt="">
                        </a>

                    </div>

                    <div class="box-content">
                        <div class="box-info box-info-1565252587628-0">
                            <div class="box-title">

                                <h3 class="titlebig mb-0" style="color:#ffffff;">No Pain No Gain</h3>

                            </div>
                            <div class="box-title2">

                                <h3 class="title-small mb-0" style="color:#ffffff;">Strong &amp; Healthy</h3>

                            </div>
                            <div class="button-main">

                                <a class="btn_link btn_link--transparent" href="#">
                                    Shop now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>

    @include('website.partials.about')
    @php $services = $frontend_helper->getPagesByID(1); @endphp
    @php $video = $frontend_helper->getPagesByID(50); @endphp
                 @php
                    $videoArray = explode('?v=',$video->link);
 
                    if(!isset($videoArray[1])){
                    $videoArray = explode('.be/',$video->link);
                    }


                    $videoId = $videoArray[1];
                    if(strpos($videoArray[1],"'&'")){
                    $result =explode('&',$videoArray[1]);
                    $videoId = $result[1];
                    }

                @endphp
    <style>
        .home-feature-category .fitness-feature-category__box{
            margin: 0 0 30px;
            padding: 0;
        }
        .home-feature-category .fitness-feature-category__title{
            font-size: 28px;
        }
    </style>
    <section class="fitness-feature-category home-feature-category">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <!---start--->
                         @forelse($services->childs as $service)
                            <div class="col-md-6">
                                <div class="fitness-feature-category__box">
                                    <a href="{{route('pages',$service->alias)}}" tabindex="0">
                                    
                                        <figure>
                                            <img src="{{ Image::make(public_path('uploads/banner_image/'.$service->banner_image),'service-list')->toUrl() }}" alt="">
                                            <div class="fitness-feature-category__content">
                                                <h3 class="fitness-feature-category__title"> {{$service->nav_name}}</h3>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                         @empty
                        @endforelse
                        <!----close---->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-video">
                          <img src="https://img.youtube.com/vi/{{$videoId}}/hqdefault.jpg" alt="" width="100%"/>
                    <a data-fancybox href="https://www.youtube.com/watch?v={{$videoId}}" class=" box-shadow-ripples">
                        <i class="fab fa-youtube"></i>

                    </a>
                    <!-- <iframe width="100%" height="415" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    </div>
                    </div>
            </div>
        </div>
    </section>



    @include('website.partials.hot-recomended')


    @include('website.partials.contact-form')

@endsection


