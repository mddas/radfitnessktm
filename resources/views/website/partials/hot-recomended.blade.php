@php $hotRecomended = $frontend_helper->getPagesByID(51); @endphp
<section class="fitness-hot-recommended">
    <div class="container container-v2">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-center">{{$hotRecomended->nav_name}}</h2>
            </div>
        </div>

    </div>
    <div class="row no-gutter pl-2 pr-2 service-slider">
        @forelse($hotRecomended->childs as $row)
            <div class="fitness-hot-recommended__box">
                <a href="{{route('pages',$row->alias)}}">

                    <figure>
                        @if($row->banner_image)
                        <img src="{{ Image::make(public_path('uploads/banner_image/'.$row->banner_image),'service-list')->toUrl() }}"
                             alt=""/>
                        @endif
                        <div class="fitness-hot-recommended__content">
                            <h3 class="fitness-hot-recommended__title">{{$row->nav_name}}</h3>
                        </div>
                    </figure>

                    <div class="fitness-hot-recommended__description">
                        {!!  $row->short_content !!}
                    </div>
                </a>
            </div>
        @empty
        @endforelse


    </div>
</section>