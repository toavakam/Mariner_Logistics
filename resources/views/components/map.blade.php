@props(['block_type'])
<div class="container-fluid p-0">
    <iframe class="fitvidsignore"
            src="{{$block_type->gmap_url}}"
            width="100%" height="500" allowfullscreen style="border:0;"></iframe>
</div>