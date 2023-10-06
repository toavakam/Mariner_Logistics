<x-layout>
    @foreach($page_block as $block_type)
        @if($block_type->block_type === 'textblock' || $block_type->block_type ==='mainiconblock')
            {!!$block_type->text_1!!}
        @elseif($block_type->block_type === 'textimageblock')
            <x-textimage :block_type="$block_type"/>
        @elseif($block_type->block_type === 'gallery')
            <x-gallery :block_type="$block_type"/>
        @elseif($block_type->block_type === 'map')
            <x-map :block_type="$block_type"/>
        @elseif($block_type->block_type ==='mainimageblock')
            <x-mainimage :block_type="$block_type"/>
            {!!$block_type->text_1!!}
        @elseif($block_type->block_type ==='mainblock2')
            <x-mainblock2 :block_type="$block_type"/>
        @elseif($block_type->block_type ==='maingallery')
            <x-maingallery :block_type="$block_type"/>
        @endif
    @endforeach
</x-layout>