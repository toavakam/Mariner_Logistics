<x-layout>
    @foreach($page_block as $block_type)
        @if($block_type->block_type === 'textblock')
            {!!$block_type->text_1!!}
        @elseif($block_type->block_type ==='textimageblock')
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 cold-md-12">
                        @if ($block_type->text_1)
                            {!!$block_type->text_1!!}
                        @endif
                        @if ($block_type->image_1)
                            <img src="{{$block_type->image_1}}" alt="">
                        @endif
                    </div>
                    <div class="col-lg-6 cold-md-12">
                        @if ($block_type->text_2)
                            {!!$block_type->text_2!!}
                        @endif
                        @if ($block_type->image_2)

                            <img src="{{$block_type->image_2}}" alt="">
                        @endif
                    </div>
                </div>
            </div>
        @elseif($block_type->block_type === 'gallery')
            <div class="row">
                @foreach($block_type->gallery?->photos as $photo)
                    <a @class(['col-md-12 p-0', 'col-lg-3' => $block_type->colcount == 4,
                                            'col-lg-4' => $block_type->colcount == 3])
                       data-lightbox="gallery-item"><img class="op-ts h-op-09" src="{{$photo->image}}"
                                                         alt="Warehouse Image"></a>

                @endforeach
            </div>
        @elseif($block_type->block_type === 'map')
            <div class="container-fluid p-0">
                <iframe class="fitvidsignore"
                        src="{{$block_type->gmap_url}}"
                        width="100%" height="500" allowfullscreen style="border:0;"></iframe>
            </div>
        @elseif($block_type->block_type ==='mainimageblock')
            <div class="overflow-hidden scroll-detect d-flex align-items-center" style="width: 100%;">
                <img src="{{$block_type->image_1}}" class="parallax-bg9">
            </div>
            {!!$block_type->text_1!!}
        @elseif($block_type->block_type ==='mainblock2')
            <div class="section my-0 py-4">
                <div class="container">
                    <div class="row align-items-md-center mb-5">
                        <div class="col-md-6 pe-5">
                            {!! $block_type->text_1 !!}
                        </div>
                        <div class="col-md-3 col-sm-6">
                            {!! $block_type->text_2 !!}
                        </div>
                    </div>
                </div>
            </div>
        @elseif($block_type->block_type ==='mainiconblock')
            {!!$block_type->text_1!!}
        @elseif($block_type->block_type ==='maingallery')
            <div class="section pb-0 mb-0 bg-transparent">
                <div id="locations-carousel" class="owl-carousel carousel-widget owl-carousel-full pb-0"
                     data-animate-in="fadeIn" data-animate-out="fadeOut" data-speed="200" data-margin="0"
                     data-nav="true"
                     data-pagi="true" data-items="1">
                    <div>
                        <div class="row m-0" data-big="2" data-lightbox="gallery">
                            @foreach($block_type->gallery?->photos as $photo)
                                @if($loop->first)
                                    <div class="col-lg-3 col-md-12 p-0">
                                        <a class="grid-item" href="{{$photo->image}}" data-lightbox="gallery-item">
                                            <img class="op-ts h-op-09" src="{{$photo->image}}" alt="Office Image">
                                        </a>
                                @elseif($loop->index===1)
                                        <a class="grid-item" href="{{$photo->image}}" data-lightbox="gallery-item">
                                            <img class="op-ts h-op-09" src="{{$photo->image}}" alt="Storage Image">
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 grid-item p-0">
                                        <iframe src="{{$block_type->gmap_url}}" width="1024" height="" allowfullscreen style="border:0;"></iframe>
                                    </div>
                                @elseif($loop->index===2)
                                    <div class="col-lg-3 col-md-12 p-0">
                                        <a class="grid-item" href="{{$photo->image}}" data-lightbox="gallery-item">
                                            <img class="op-ts h-op-09" src="{{$photo->image}}" alt="Office image">
                                        </a>
                                @elseif($loop->index===3)
                                        <a class="grid-item" href="{{$photo->image}}" data-lightbox="gallery-item">
                                            <img class="op-ts h-op-09" src="{{$photo->image}}" alt="Storage image">
                                        </a>
                                    </div>
                                @elseif($loop->index===4)
                                    <div class="row m-0 p-0">
                                        <div class="col-lg-3 col-md-12 p-0">
                                            <a class="grid-item" href="{{$photo->image}}" data-lightbox="gallery-item">
                                                <img class="op-ts h-op-09" src="{{$photo->image}}" alt="Storage Image">
                                            </a>
                                        </div>
                                @else
                                        <div class="col-lg-3 col-md-12 p-0">
                                            <a class="grid-item" href="{{$photo->image}}" data-lightbox="gallery-item">
                                                <img class="op-ts h-op-09" src="{{$photo->image}}" alt="Storage image">
                                            </a>
                                        </div>
                                @endif
                                        @if($loop->last && count($block_type->gallery->photos) > 4)
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        {!!$block_type->text_1!!}
                    </div>
                </div>
            </div>
        @endif
    @endforeach

</x-layout>