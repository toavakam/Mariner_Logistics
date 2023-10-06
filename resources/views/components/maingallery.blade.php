@props(['block_type'])
<div class="section py-0 my-0 bg-transparent">
    <div id="locations-carousel" class="owl-carousel carousel-widget owl-carousel-full pb-0"
         data-animate-in="fadeIn" data-animate-out="fadeOut" data-speed="200" data-margin="0"
         data-nav="true"
         data-pagi="true" data-items="1">
        <div>
            <div class="row m-0" data-big="2" data-lightbox="gallery">
                @foreach($block_type->gallery?->photos as $photo)
                    @if($loop->first)
                        <div class="col-lg-3 col-md-12 p-0">
                            <a class="grid-item" href="{{Storage::url($photo->image)}}" data-lightbox="gallery-item">
                                <img class="op-ts h-op-09" src="{{Storage::url($photo->image)}}" alt="Office Image">
                            </a>
                            @elseif($loop->index===1)
                                <a class="grid-item" href="{{Storage::url($photo->image)}}" data-lightbox="gallery-item">
                                    <img class="op-ts h-op-09" src="{{Storage::url($photo->image)}}" alt="Storage Image">
                                </a>
                        </div>
                        <div class="col-lg-6 col-md-12 grid-item p-0">
                            <iframe src="{{$block_type->gmap_url}}" width="1024" height="" allowfullscreen style="border:0;"></iframe>
                        </div>
                    @elseif($loop->index===2)
                        <div class="col-lg-3 col-md-12 p-0">
                            <a class="grid-item" href="{{Storage::url($photo->image)}}" data-lightbox="gallery-item">
                                <img class="op-ts h-op-09" src="{{Storage::url($photo->image)}}" alt="Office image">
                            </a>
                            @elseif($loop->index===3)
                                <a class="grid-item" href="{{Storage::url($photo->image)}}" data-lightbox="gallery-item">
                                    <img class="op-ts h-op-09" src="{{Storage::url($photo->image)}}" alt="Storage image">
                                </a>
                        </div>
                    @elseif($loop->index===4)
                        <div class="row m-0 p-0">
                            <div class="col-lg-3 col-md-12 p-0">
                                <a class="grid-item" href="{{Storage::url($photo->image)}}" data-lightbox="gallery-item">
                                    <img class="op-ts h-op-09" src="{{Storage::url($photo->image)}}" alt="Storage Image">
                                </a>
                            </div>
                            @else
                                <div class="col-lg-3 col-md-12 p-0">
                                    <a class="grid-item" href="{{Storage::url($photo->image)}}" data-lightbox="gallery-item">
                                        <img class="op-ts h-op-09" src="{{Storage::url($photo->image)}}" alt="Storage image">
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