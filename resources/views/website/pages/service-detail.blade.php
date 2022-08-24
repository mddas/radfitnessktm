@extends('website.layouts.app')
@section('content')
    @include('website.pages.breadcrumbs')
    <section class="service-detail-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>
                        {!! $page->caption !!}
                    </h2>

                    {!! $page->long_content !!}
                    <a href="#registration" class="join-now ">Join Now</a>
                </div>
                <div class="col-lg-6">
                    <figure>
                        <img src="{{ Image::make(public_path('uploads/banner_image/'.$page->banner_image),'service-detail')->toUrl() }}"
                             alt=""/>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="register_now">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 box">
                    <a href="{{route('pages','services')}}" class="btn-white">Now</a>
                    <h4>Programs</h4>
                    <p>Choose your programs </p>
                </div>
                <div class="col-lg-3 box">
                    <a href="#registration" class="btn-white">Register Now</a>
                    <h4>Membership</h4>
                    <p>Choose your programs </p>
                </div>
                <div class="col-lg-3 box">
                    <a href="{{route('pages','contact')}}" class="btn-white">Claim it</a>
                    <h4>Discount Offer</h4>
                    <p>Choose your programs </p>
                </div>
                <div class="col-lg-3">
                    <div class="learn-more">
                        <a href="#registration" class="join-now">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($page->id == 2)
        <section class="tainning">
            <div class="container">
                @php $subChild = $frontend_helper->getPagesByID($page->id); @endphp

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        @forelse($subChild->childs as  $list)
                            <div class="figure-wrap">
                                <figure>
                                    <img src="{{  asset('uploads/banner_image/'.$list->banner_image)  }}"
                                         alt=""/>
                                </figure>
                            </div>

                            @break
                        @empty
                        @endforelse

                    </div>
                    <div class="col-lg-6 col-md-12">
                        @forelse($subChild->childs as  $list)
                            <div class="box">
                                <h3>{{$list->nav_name}}</h3>
                                {!! $list->short_content !!}
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </section>


    @endif

    @if($page->id == 20)
        @include('website.partials.hot-recomended')
    @endif
    @if($page->id == 20 || $page->id == 2)
        @php $programs = $frontend_helper->getPagesByID(25); @endphp
        <section class="training-programs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h2 class="section-title text-center">
                            Our Training Program
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                @forelse($programs->childs as $program)
                    <div class="col-lg-4 col-md-4 col-md-12">
                       <div class="box" style="padding: 0 20px ">
                            <figure>
                                <a href="{{route('pages',$program->alias)}}"> <img src="{{ Image::make(public_path('uploads/banner_image/'.$program->banner_image),'trainer')->toUrl() }}"
                                                                                   alt="" width="100%"/></a>
                            </figure>
                           <h3> <a href="{{route('pages',$program->alias)}}">{!! $program->nav_name !!}</a></h3>
                            {!! $program->short_content !!}
                        </div>

                    </div>
                @empty
                @endforelse
            </div>
        </section>
    @endif

    @if(  $page->id == 3)
        @php $spas = $frontend_helper->getPagesByID(3); @endphp
        <section class="training-programs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h2 class="section-title text-center">
                            Spa Service
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                @forelse($spas->childs as $program)
                    @if($program->id != 42 )
                        <div class="col-lg-3 col-md-4 col-md-12">
                            <div class="box" style="padding: 0 20px ">
                                <figure>
                                    <a href="{{route('pages',$program->alias)}}"><img src="{{ Image::make(public_path('uploads/banner_image/'.$program->banner_image),'trainer')->toUrl() }}"
                                                                                      alt="" width="100%"/></a>
                                </figure>
                                <h3> <a href="{{route('pages',$program->alias)}}">{!! $program->nav_name !!}</a></h3>
                                {!! $program->short_content !!}
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
        </section>
        @php $happyCustomers = $frontend_helper->getPagesByID(42); @endphp
        <section class="training-programs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h2 class="section-title text-center">
                            Happy Customers
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                @forelse($happyCustomers->childs as $happyCustomer)

                    <div class="col-lg-3 col-md-4 col-md-12">
                        <div class="box" style="padding: 0 20px ">
                            <figure>
                                <a href="{{route('pages',$program->alias)}}">  <img src="{{ Image::make(public_path('uploads/banner_image/'.$happyCustomer->banner_image),'trainer')->toUrl() }}"
                                                                                    alt="" width="100%"/></a>
                            </figure>
                            <h3> <a href="{{route('pages',$program->alias)}}">{!! $happyCustomer->nav_name !!}</a></h3>
                            {!! $happyCustomer->short_content !!}
                        </div>
                    </div>

                @empty
                @endforelse
            </div>
        </section>
    @endif

    @if(  $page->id == 4)
        <div class="service-page">
            <div class="container">


                @forelse($page->childs as $swimingList)
                    @if ($loop->odd)
                        <div class="row no-gutters service-page-listing">
                            <div class="service-left">
                                <figure>
                                    <a href="{{route('pages',$swimingList->alias)}}"><img
                                                src="{{ Image::make(public_path('uploads/banner_image/'.$swimingList->banner_image),'service-thumb')->toUrl() }}"
                                                alt=""/></a>
                                </figure>
                            </div>
                            <div class="service-right">
                                <div class="content_box">
                                    <a href="{{route('pages',$swimingList->alias)}}"><h3 >{{$swimingList->nav_name}}</h3>
                                        {!!  $swimingList->long_content !!}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @elseif ($loop->even)
                        <div class="row no-gutters service-page-listing even">

                            <div class="service-right">
                                <div class="content_box">
                                    <a href="{{route('pages',$swimingList->alias)}}"><h3>{{$swimingList->nav_name}}</h3>
                                        {!!  $swimingList->long_content !!}
                                    </a>
                                </div>
                            </div>
                            <div class="service-left">
                                <figure>
                                    <a href="{{route('pages',$swimingList->alias)}}"><img
                                                src="{{ Image::make(public_path('uploads/banner_image/'.$swimingList->banner_image),'service-thumb')->toUrl() }}"
                                                alt=""/></a>
                                </figure>
                            </div>
                        </div>
                    @endif

                @empty
                @endforelse


            </div>
        </div>


        @include('website.partials.services')
    @endif

    @include('website.partials.contact-form')

@endsection