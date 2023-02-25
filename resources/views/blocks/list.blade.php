 @php
     $style = $data['data']->style;
     
     $tag = $style == 'ordered' ? 'ol' : 'ul';
     $id = $data['id'];
 @endphp

 <{{ $tag }} id="{{ $id }}">
     @foreach ($data['data']->items as $item)
         <li>{!! $item->content !!}</li>

         @if (is_array($item->items))
             <ul>
                 @foreach ($item->items as $item)
                     <li>{!! $item->content !!}</li>
                     @if (is_array($item->items))
                         <ul>
                             @foreach ($item->items as $item)
                                 <li>{!! $item->content !!}</li>
                             @endforeach
                         </ul>
                     @endif
                 @endforeach
             </ul>
         @endif
     @endforeach
     </{{ $tag }}>
