@php $services = $frontend_helper->getPagesByID(1); @endphp
<section class="fitness-feature-category">
    <!-- <div class="container container-v2">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-center">{{$services->nav_name}}</h2>
            </div>
        </div>

    </div> -->
    <div class="row no-gutter pl-2 pr-2 service-slider">
        @forelse($services->childs as $service)
            <div class="fitness-feature-category__box">
                <a href="{{route('pages',$service->alias)}}">
                   
                    <figure>
                         @if($service->banner_image)
                        <img src="{{ Image::make(public_path('uploads/banner_image/'.$service->banner_image),'service-list')->toUrl() }}" alt=""/>
                        @endif
                        <div class="fitness-feature-category__content">
                            <h3 class="fitness-feature-category__title"> {{$service->nav_name}}</h3>
                        </div>
                    </figure>
                </a>
            </div>
        @empty
        @endforelse


    </div>
</section>