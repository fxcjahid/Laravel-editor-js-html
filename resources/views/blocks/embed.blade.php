<div class="block-embed block"
     id={{ $data['id'] }}>
    <div class="block-embed__holder">
        <iframe @if (isset($data['data']->width)) width="100%" @endif
                @if (isset($data['data']->height)) height="500px" @endif
                src="{{ $data['data']->embed }}"
                frameborder="0"></iframe>
    </div>
    @if (isset($data['data']->caption) && $data['data']->caption)
        <span class="block-embed__caption">
            {{ $data['data']->caption }}
        </span>
    @endif
</div>
