
@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">



        {{-- Pagination Elements --}}
        <ul style="list-style: none" class="pagination-list d-flex">
            {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
                <a class="pagination-previous btn btn-secondary disabled" disabled>@lang('pagination.previous')</a>
            @else
                <a class="pagination-previous btn btn-outline-primary" href="{{ $paginator->previousPageUrl() }}">@lang('pagination.previous')</a>
            @endif
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                @endif
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="pagination-link is-current btn btn-primary" aria-label="Goto page {{ $page }}">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}" class="pagination-link btn btn-outline-primary" aria-label="Goto page {{ $page }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="pagination-next btn btn-outline-primary" href="{{ $paginator->nextPageUrl() }}">@lang('pagination.next')</a>
                @else
                    <a  class="pagination-next btn btn-secondary disabled" disabled>@lang('pagination.next')</a>
                @endif
        </ul>


    </nav>
@endif
