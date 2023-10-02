<x-layout>
    @foreach ($page_block as $block)
        @if($block->text_1 && $block->image_2)
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6 cold-md-12">
                        {!!$block->text_1!!} </div>
                    <div class="col-lg-6 cold-md-12">
                        <img src="{{$block->image_2}}" alt=""></div>
                </div>
            </div>
        @elseif($block->image_1 && $block->text_2)
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6 cold-md-12">
                        <img src="{{$block->image_1}}" alt=""></div>
                    <div class="col-lg-6 cold-md-12">
                        {!!$block->text_2!!} </div>
                </div>
            </div>
        @elseif($block->gmap_url)
            <div class="container-fluid p-0">
                <iframe class="fitvidsignore"
                        src="{{$block->gmap_url}}"
                        width="100%" height="500" allowfullscreen style="border:0;"></iframe>
            </div>
            @elseif($block->gallery_id)
            @if(isset($photos))
                @php
                    $colClass = count($photos) == 8 ? 'col-lg-3' : 'col-lg-4';
                @endphp
                <div class="row">
                    @foreach ($photos as $photo)
                        <a class="{{$colClass}} col-md-12 p-0" href="{{$photo->image}}"
                           data-lightbox="gallery-item"><img class="op-ts h-op-09" src="{{$photo->image}}"
                                                             alt="Warehouse Image"></a>
                    @endforeach
                </div>
            @endif

        @else
            {!!$block->text_1!!}
        @endif
    @endforeach
</x-layout>