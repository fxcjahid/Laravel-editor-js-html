<div class="my-1 ml-1 text-left">
    @foreach ($data['data']->items as $item)
        <div class="my-2 mx-1 flex items-center gap-2">

            @if ($item->checked)
                <svg class="h-6 w-6 fill-current text-green-500"
                     viewBox="0 0 40 40"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                          d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="currentColor"
                     class="mt-1.5 h-6 w-6 fill-current text-red-500"
                     viewBox="0 0 15 20">
                    <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
            @endif

            <div class="text-xl text-gray-900 dark:text-gray-200">
                {!! $item->text !!}
            </div>
        </div>
    @endforeach
</div>
