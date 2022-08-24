@if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif

@if(Session::has('success'))
    <div class="alert alert-info">{{ Session::get('success') }}</div>
@endif
<header>
    <!-- <div class="header_top">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div> -->
    <div class="main_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="logo site-branding">
                        @if($settings->site_logo)
                            <a href="{{ url('/') }}" class="custom-logo-link">
                                <img src="{{asset('uploads/icons/'.$settings->site_logo)}}" class="custom-logo" alt="">
                            </a>
                    @endif
                    <!--<h1 class="site-title">
                            <a href="#" rel="home">All Store</a>
                        </h1>
                        <p class="site-description">Your Shopping Fantasy</p>-->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="nav_outer" style="text-align: center">
                        <nav id="site-navigation" class="main-navigation">
                            <button class="main-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i
                                        class="fa fa-bars"></i></button>

                            <div class="main-menu-container-collapse">
                                <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    @foreach($menus as $menu)
                                        @if($menu->id !=33)
                                            @if(count($menu->childs) && $menu->id !=8)
                                                @php $child = $frontend_helper->childMenu($menu->id) @endphp
                                                <li class="menu-item-has-children">
                                                    <a href=" @if($child->count()>0) # @else {{route('pages',$menu->alias)}} @endif"> {{$menu->nav_name}} </a>                                                    
                                                    @if($child->count()>0)
                                                        <ul class="sub-menu">                                                        
                                                                @foreach($child as $childMenu)
                                                                    <li>
                                                                        <a href="{{route('pages',$childMenu->alias)}}"> {{$childMenu->nav_name}} </a>
                                                                    </li>
                                                                @endforeach
                                                        </ul>
                                                    @endif

                                                </li>

                                            @else
                                                <li><a href="{{route('pages',$menu->alias)}}"> {{$menu->nav_name}} </a>
                                                </li>
                                            @endif
                                        @endif

                                    @endforeach


                                </ul>
                            </div>

                        </nav>
                    </div>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <ul class="social-media">
                        @if($settings->facebook)
                            <li>
                                <a href="{{$settings->facebook}}" target="_blank">
                                    <img src="{{asset('website/images/logo/fb.png')}}" alt=""/>
                                </a>
                            </li>
                        @endif
                        @if($settings->instagram)
                            <li>
                                <a href="{{$settings->instagram}}" target="_blank">
                                    <img src="{{asset('website/images/logo/insta.png')}}" alt=""/>
                                </a>
                            </li>
                        @endif
                        @if($settings->linkedin)
                            <li>
                                <a href="{{$settings->linkedin}}" target="_blank">
                                    <img src="{{asset('website/images/logo/linkedin.png')}}" alt=""/>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
