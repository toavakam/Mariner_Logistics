@props(['block_type'])
<div @class(['bg-block-dark' => $block_type->colored])>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 cold-md-12">
            @if ($block_type->text_1)
                {!!$block_type->text_1!!}
            @endif
            @if ($block_type->image_1)
                <img src="{{Storage::url($block_type->image_1)}}" alt="">
            @endif
        </div>
        <div class="col-lg-6 cold-md-12">
            @if ($block_type->text_2)
                {!!$block_type->text_2!!}
            @endif
            @if ($block_type->image_2)
                <img src="{{Storage::url($block_type->image_2)}}" alt="">
            @endif
        </div>
    </div>
</div>
</div>