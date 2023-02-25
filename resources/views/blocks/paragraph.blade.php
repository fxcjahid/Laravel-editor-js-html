@php
    $tag = 'p';
    $id = $data['id'];
    $tunes = $data['tunes']->alignment->alignment;
    $class = implode(' ', [$tunes]);
@endphp

<{{ $tag }} id="{{ $id }}"
                     @class($class)>{!! $data['data']->text !!}
    </{{ $tag }}>
