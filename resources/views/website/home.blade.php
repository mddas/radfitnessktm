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


    @include('website.partials.services')

    @php $video = $frontend_helper->getPagesByID(50); @endphp

    <section class="section-video">
        <div class="container">
            <div class="row" style="justify-content: space-around">
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
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <img src="https://img.youtube.com/vi/{{$videoId}}/hqdefault.jpg" alt="" width="100%"/>
                    <a data-fancybox href="https://www.youtube.com/watch?v={{$videoId}}" class=" box-shadow-ripples">
                        <i class="fab fa-youtube"></i>

                    </a>


                </div>
                <div class="col-lg-12">
                    <h3>We Provide world class equipment from PRECOR USA with certified Trainners</h3>
                </div>
            </div>
        </div>
    </section>

    @include('website.partials.hot-recomended')


    @include('website.partials.contact-form')

@endsection


