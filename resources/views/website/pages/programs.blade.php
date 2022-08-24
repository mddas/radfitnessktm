@extends('website.layouts.app')
@section('content')
    @include('website.pages.breadcrumbs')

<section class="banner-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">{{$page->nav_name}}</h1>

            </div>
        </div>
    </div>
</section>

<section class="personal-training-description">
    <div class="container">
        <div class="row " >
            <div class="col-lg-12 personal-training-description__inner_wraper">
                <div class="box">
                    <h3 class="text-center">General Fitness</h3>
                    <div class="mt-5"></div>
                   {!! $page->long_content !!}
                    <figure style="margin: 0 auto;text-align: center">
                        <img src="{{ Image::make(public_path('uploads/banner_image/'.$page->banner_image),'trainer')->toUrl() }}" alt=""/>
                    </figure>
                </div>

            </div>


        </div>
    </div>
</section>


@php $trainers = $frontend_helper->getPagesByID(33); @endphp
<section class="training-programs">

        <div class="row no-gutters">
            <div class=" col-md-12">
                <h2 class="section-title text-center">Our Trainners</h2>
            </div>
            @forelse($trainers->childs as $trainer)
                <div class="col-lg-3 col-md-4 col-md-12 " style="padding:0 20px">
                    <div class="box">
                        <a href="{{route('pages',$trainer->alias)}}"><figure>
                            <img src="{{ Image::make(public_path('uploads/banner_image/'.$trainer->banner_image),'trainer')->toUrl() }}" alt=""/>
                        </figure>
                        <h3>{{$trainer->nav_name}}</h3>
                        {!! $trainer->long_content !!}
                        </a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>


</section>

@endsection