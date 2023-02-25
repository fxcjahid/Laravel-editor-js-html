@php
    $withHeadings = $data['data']->withHeadings;
    $content = $data['data']->content;
@endphp

<div class="relative my-8 overflow-x-auto rounded border">
    <table class="w-full text-left text-lg text-gray-900">
        @if ($withHeadings)
            <thead class="bg-gray-50 text-xl text-gray-800">
                <tr>
                    @foreach ($content[0] as $heads)
                        <th scope="col"
                            class="py-3 px-6 !font-semibold">
                            {!! $heads !!}
                        </th>
                    @endforeach
                </tr>
            </thead>
        @endif
        <tbody>
            @if ($withHeadings)
                @foreach (array_slice($content, 1) as $key => $row)
                    <tr class="border-b bg-white last:border-none">
                        @foreach ($row as $cell)
                            <td class="py-4 px-6">
                                {!! $cell !!}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            @else
                @foreach ($content as $key => $row)
                    <tr class="border-b bg-white last:border-none">
                        @foreach ($row as $cell)
                            <td class="py-4 px-6">
                                {!! $cell !!}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>
</div>
