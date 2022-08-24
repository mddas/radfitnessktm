@if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif

@if(Session::has('success'))
    <div class="alert alert-info">{{ Session::get('success') }}</div>
@endif

<section class="breadcrumb">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12 breadcrumb_wrapper">

                <nav id="breadcrumb" class="fitness-park-breadcrumb">
                    <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs"
                         itemprop="breadcrumb">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">

                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                                class="trail-item trail-begin"><a href="{{ url('/') }}"  rel="home" itemprop="item"><span
                                            itemprop="name">Home</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                                class="trail-item trail-end"><span itemprop="item"><span
                                            itemprop="name">{{$page->nav_name }}</span></span>
                                <meta itemprop="position" content="2">
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="logo site-branding">
                    @if($settings->site_logo)
                        <a href="{{ url('/') }}" class="custom-logo-link">
                            <img src="{{asset('uploads/icons/'.$settings->site_logo)}}" class="custom-logo" alt="">
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>