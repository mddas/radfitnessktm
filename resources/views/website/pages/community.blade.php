@extends('website.layouts.app')
@section('content')
    @include('website.pages.breadcrumbs')
    <style>
    .about-home{
        background: #f3f3f3;
    }
    .about-home .align-iteme-center{        
    align-items: center;

    }
    .about-home img{
        max-width: 350px;
    }
    .about-home h2.section-title{
        margin-bottom: 10px !important;
    }
    .about-home h2.section-title span{
        color: #8baf31;
    }
    .about-home p{
        font-size: 16px;
        line-height: 26px;
        text-align: justify;
    }
    .about-home .read-more{
        background: #000;
        color: #fff !important;
        padding: 10px 30px;
        border: 0;
        font-weight: 400;
        font-size: 14px;
        border: 1px solid #000;
    }
    .about-home .read-more:hover{
        background: transparent;
        color: #000 !important;
    }
</style>
<section class="about-home">
    <div class="container container-v2">
        <h2 class="section-title"><span>Community</span></h2>
        <div class="row align-iteme-center">
        <div class = "col-md-6" >
            <p>@php echo $page->long_content; @endphp </p>
        </div> 
        <div class = "col-md-6" >
            <img src="/uploads/banner_image/{{$page->banner_page}}">
        </div>
        </div>
    </div>
</section>

    <section class="fitness-page">
        <div class="container">
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