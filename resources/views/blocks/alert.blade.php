@php
    $id = $data['id'];
    
    $tunes = $data['tunes']->alignment->alignment;
    $type = $data['data']->type;
    $message = $data['data']->message;
    
    switch ($type) {
        case 'primary':
            $blindClass = 'alert alert-primary';
            break;
        case 'secondary':
            $blindClass = 'alert alert-secondary';
            break;
        case 'info':
            $blindClass = 'alert alert-info';
            break;
        case 'success':
            $blindClass = 'alert alert-success';
            break;
        case 'warning':
            $blindClass = 'alert alert-warning';
            break;
        case 'danger':
            $blindClass = 'alert alert-danger';
            break;
        case 'light':
            $blindClass = 'alert alert-light';
            break;
        case 'dark':
            $blindClass = 'alert alert-dark';
            break;
        default:
            $blindClass = 'alert';
            break;
    }
    
    $class = implode(' ', [$tunes, $blindClass]);
    
@endphp

<div id="{{ $id }}"
     @class($class)
     role="{{ $type }}">
    {!! $message !!}
</div>
