@props(['block_type'])
<div class="row">
    @foreach($block_type->gallery?->photos->where('is_active', 1) as $photo)
        <a @class(['col-md-12 p-0', 'col-lg-3' => $block_type->colcount == 4,
                                            'col-lg-4' => $block_type->colcount == 3])
           data-lightbox="gallery-item"><img class="op-ts h-op-09" src="{{Storage::url($photo->image)}}"
                                             alt="Warehouse Image"></a>
    @endforeach
</div>
