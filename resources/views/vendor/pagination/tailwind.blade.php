@if ($paginator->hasPages())
    <nav>
        <ul class="flex items-center justify-center p-4 mt-4 text-pink-600">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="bg-pink-600 text-white px-4 py-2   m-1 border-pink-600 rounded-md" aria-disabled="true" aria-label="@lang('pagination.previoborder us')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="bg-white px-4 py-2 m-1 border border-pink-600 rounded-md hover:bg-pink-600 hover:text-white  ">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                {{-- @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif --}}

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="bg-pink-600 text-white px-4 py-2   m-1 border border-pink-600 rounded-md" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="bg-white px-4 py-2 m-1 border border-pink-600 rounded-md hover:bg-pink-600 hover:text-white  "><a  href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="bg-white px-4 py-2 m-1 border border-pink-600 rounded-md hover:bg-pink-600 hover:text-white  ">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="bg-pink-600 text-white px-4 py-2   m-1 border border-pink-600 rounded-md" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
