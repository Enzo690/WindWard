
@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">

        {{-- Pagination Elements --}}
        <ul style="list-style: none" class="pagination-list d-flex">
            {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
                <a class="pagination-previous btn btn-secondary disabled" disabled> < </a>
            @else
                <a style="color: black" class="pagination-previous btn btn-outline-light" href="{{ $paginator->previousPageUrl() }}"> < </a>
            @endif
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                @endif
                {{-- Array Of Links --}}
            @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a style="color: black" class="pagination-next btn btn-outline-light" href="{{ $paginator->nextPageUrl() }}"> > </a>
                @else
                    <a  class="pagination-next btn btn-secondary disabled" disabled> > </a>
                @endif
        </ul>


    </nav>
@endif
