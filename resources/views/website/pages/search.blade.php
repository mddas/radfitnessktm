@extends('website.layouts.app')
@section('content')

    <section class="sec-natvigation">
        <div class="container">
            <div class="row " style="justify-content: space-around">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-title">Search Result For: {{ $searchTitle }}</h2>
                        </div>
                    </div>


                    @forelse($searchResult  as $item)
                        @if($item->banner_image)
                            <div class="row no-gutters notice mb-4">
                                <div class="col-lg-4 col-md-12">

                                    <figure>
                                        <a href="{{route('pages',$item->alias)}}">
                                            <img src=" {{ Image::make(public_path('uploads/banner_image/'.$item->banner_image),'news')->toUrl() }} "
                                                 alt=" "/>
                                        </a>
                                    </figure>

                                </div>
                                <div class="col-lg-8 col-md-12" style="padding: 15px">
                                    <a href="{{route('pages',$item->alias)}}">
                                        <h4>{{$item->nav_name}}</h4>

                                        {!! $item->short_content !!}
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="row no-gutters notice mb-4">

                                <div class="col-lg-12 col-md-12" style="padding: 15px">
                                    <a href="{{route('pages',$item->alias)}}">
                                        <h4>{{$item->nav_name}}</h4>

                                        {!! $item->short_content !!}
                                    </a>
                                </div>
                            </div>
                        @endif

                         
                    @empty
                        <h2>Nothing Found</h2>
                    @endforelse

                    {{ $searchResult->links() }}
                </div>
                @include('website.pages.sidebar')


            </div>


        </div>
    </section>


@endsection