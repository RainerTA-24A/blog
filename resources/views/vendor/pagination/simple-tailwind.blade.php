@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="join flex items-center justify-between">

        @if ($paginator->onFirstPage())
            <span class="btn join-item btn-disabled" aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn join-item" aria-label="{{ __('pagination.previous') }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn join-item" aria-label="{{ __('pagination.next') }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="btn join-item btn-disabled" aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                {!! __('pagination.next') !!}
            </span>
        @endif

    </nav>
@endif
