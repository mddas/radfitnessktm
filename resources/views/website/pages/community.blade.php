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

            <div class="community">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-title">Why Join our Community?</h2>
                    </div>
                </div>
                <div class="row">
                    @forelse($page->childs as $row)
                        <div class="col-lg-6 col-md-6">
                            <div class="box">
                                <figure>
                                    <img src="{{ Image::make(public_path('uploads/banner_image/'.$row->banner_image),'community')->toUrl() }}"
                                         alt=""/>
                                </figure>
                                <h3>{{$row->nav_name}}</h3>
                                {!! $row->long_content !!}

                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

    </section>
@endsection