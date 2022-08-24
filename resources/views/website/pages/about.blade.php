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
        </div>
    </section>


    @include('website.partials.services')


@endsection