@if ($paginator->hasPages())
<nav class="d-flex" aria-label="pagination">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item">
            <a href="#" aria-label="Previous" class="page-link disabled">
                <span aria-hidden="true">«</span><span class="sr-only">Previous</span>
            </a>
        </li>
        @else
        <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" class="page-link">
                <span aria-hidden="true">«</span><span class="sr-only">Previous</span>
            </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        {{-- @if (is_string($element))
        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
        @endif --}}

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next" class="page-link">
                <span aria-hidden="true">»</span><span class="sr-only">Next</span>
            </a>
        </li>
        @else
        <li class="page-item">
            <a href="#" aria-label="Next" class="page-link disabled">
                <span aria-hidden="true">»</span><span class="sr-only">Next</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif