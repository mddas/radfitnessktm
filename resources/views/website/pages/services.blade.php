@extends('website.layouts.app')
@section('content')
    @include('website.pages.breadcrumbs')
    <section class="fitness-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {!! $page->long_content !!}
                </div>
            </div>
            @php $services = $frontend_helper->getPagesByID($page->id); @endphp

            <div class="service-page">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-title text-center">{{$page->nav_name}}</h2>
                    </div>
                </div>
                @forelse($services->childs as $service)
                    @if ($loop->odd)
                        <div class="row no-gutters service-page-listing">
                            <div class="service-left">
                                <figure>
                                    <a href="{{route('pages',$service->alias)}}"><img
                                                src="{{ Image::make(public_path('uploads/banner_image/'.$service->banner_image),'service-thumb')->toUrl() }}"
                                                alt=""/></a>
                                </figure>
                            </div>
                            <div class="service-right">
                                <div class="content_box">
                                    <a href="{{route('pages',$service->alias)}}"><h3 >{{$service->nav_name}}</h3>
                                        {!!  $service->long_content !!}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @elseif ($loop->even)
                        <div class="row no-gutters service-page-listing even">

                            <div class="service-right">
                                <div class="content_box">
                                    <a href="{{route('pages',$service->alias)}}"><h3>{{$service->nav_name}}</h3>
                                        {!!  $service->long_content !!}
                                    </a>
                                </div>
                            </div>
                            <div class="service-left">
                                <figure>
                                    <a href="{{route('pages',$service->alias)}}"><img
                                                src="{{ Image::make(public_path('uploads/banner_image/'.$service->banner_image),'service-thumb')->toUrl() }}"
                                                alt=""/></a>
                                </figure>
                            </div>
                        </div>
                    @endif

                @empty
                @endforelse
            </div>


        </div>

    </section>

@endsection