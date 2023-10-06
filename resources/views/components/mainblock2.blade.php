@props(['block_type'])
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
