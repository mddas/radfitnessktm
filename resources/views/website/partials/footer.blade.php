<footer id="colophon" class="site-footer">
    <div class="upper-footer">

        <div class="row no-gutters">
            <div class="column company-info">
                <div class="media">
                    <div class="media-left">
                        @if($settings->site_logo)
                            <a href="index.php" class="footer-logo">
                                <img src="{{asset('uploads/icons/'.$settings->site_logo)}}" width="100px"/>
                            </a>
                        @endif

                    </div>
                    <div class="media-content">
                        <ul class="menu-list">
                            @if($settings->site_email)
                                <li>
                                    <a><i class="fas fa-map-marker-alt"></i> {{$settings->site_email}}</a>
                                </li>
                            @endif
                            @if($settings->phone)
                                <li><a><i class="far fa-map"></i> {{$settings->phone}}</a></li>
                            @endif
                            @if($settings->site_email)
                                <li><a><i class="far fa-envelope"></i> {{$settings->site_email}}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column about-footer">
                <div class="widget widget_contact">
                    @php $about= $frontend_helper->getPagesByID(10); @endphp
                    <h2 class="widget-title">{{$about->nav_name}}</h2>
                    {!! $about->short_content !!}

                </div>
            </div>
            <div class="column column-list">
                <div class="widget widget_contact">
                    <h2 class="widget-title">Our Services</h2>
                    @php $services = $frontend_helper->getPagesByID(1); @endphp
                    <ul>
                        @forelse($services->childs as $service)
                            <li><a href="{{route('pages',$service->alias)}}">{{$service->nav_name}}</a> </li>
                        @empty
                        @endforelse
                    </ul>

                </div>
            </div>
            <div class="column column-list">
                <div class="widget widget_contact">
                    <h2 class="widget-title">Company</h2>
                    <ul>
                        <li><a href="{{route('pages','about-us')}}">About Us</a>
                        </li>
                        <li><a href="{{route('pages','contact')}}">Contact Us</a>
                        </li>
                        <li><a href="{{route('pages','services')}}">Our Services</a>

                        </li>

                    </ul>

                </div>
            </div>
            <div class="column column-list">
                <div class="widget widget_contact">
                    <h2 class="widget-title">Help & Information</h2>
                    <ul>
                        <li><a href="{{route('pages','terms-and-condition')}}">Terms & Services</a>
                        </li>
                        <li><a href="{{route('pages','policy')}}">Policy</a>
                        </li>
                        <li><a href="{{route('pages','contact')}}">Contact Us</a>

                        </li>

                    </ul>

                </div>
            </div>
        </div>


    </div>
    <!--<div class="lower-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <p class="copyright">AllRight Reserved 2020. Fitness Choice. Powered By: <a href="https://radiantnepal.com/" target="_blank">Radiant InfoTech</a></p>
                </div>

            </div>
        </div>

    </div>-->

</footer>