<nav aria-label="...">
    <ul class="pagination">
        <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">Anterior</a>
        </li>
        @foreach ($elements[0] as $page => $url)
            <li class="page-item {{ ($page == $paginator->currentPage()) ? 'active' : ''}}">
                <a class="page-link" href="{{ $url }}">
                    {{ $page }}
                </a>
            </li>
        @endforeach
        {{-- <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only"></span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
        <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Próximo</a>
        </li>
    </ul>
</nav>
