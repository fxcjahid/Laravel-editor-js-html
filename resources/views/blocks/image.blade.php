@php
    $classes = 'images';
    if ($data['data']->stretched) {
        $classes .= ' image--stretched';
    }
    if ($data['data']->withBorder) {
        $classes .= ' image--bordered';
    }
    if ($data['data']->withBackground) {
        $classes .= ' image--backgrounded';
    }
    
    $id = $data['id'];
    $tunes = $data['tunes']->alignment->alignment;
    $class = implode(' ', [$tunes, $classes]);
    
@endphp

<figure role="image"
        id="{{ $id }}"
        @class($class)>
    <img src="{{ $data['data']->file->url }}"
         alt="{{ $data['data']->caption ?: '' }}">
    @if (!empty($data['data']->caption))
        <figcaption role="caption"
                    class="image-caption mt-1 mb-5 px-4 text-center font-trebuchet text-base font-normal text-gray-700">
            {{ $data['data']->caption }}
        </figcaption>
    @endif
</figure>
