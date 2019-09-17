@if ($paginator->lastPage() > 1)
    <ul class="flex justify-center">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}" class="block px-4 py-2 hover:text-orange-500">Previous</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $paginator->url($i) }}" class="block px-4 py-2 hover:text-orange-500">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}"  class="block px-4 py-2 hover:text-orange-500" >Next</a>
        </li>
    </ul>
@endif
