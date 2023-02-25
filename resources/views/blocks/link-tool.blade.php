<div class="link-embed">
    <a class="embed-link"
       href="{{ $data['data']->link }}"
       target="_blank"
       rel="nofollow">
        @php
            $metaImageUrl = $data['data']->meta->image->url ?? '';
        @endphp
        @if ($metaImageUrl)
            <img class="embed-link__image"
                 src="{{ $metaImageUrl }}">
        @endif

        <div class="embed-link__title">
            {{ $data['data']->meta->title }}
        </div>

        <div class="embed-link__description">
            {{ $data['data']->meta->description }}
        </div>

        <span class="embed-link__domain">
            {{ parse_url($data['data']->link, PHP_URL_HOST) }}
        </span>
    </a>
</div>
