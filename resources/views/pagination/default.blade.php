@if ($paginator->lastPage() > 1)
    <ul class="flex justify-center">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} px-1">
            <a href="{{ $paginator->url(1) }}" class="block px-4 py-2 hover:text-orange-500 hover:cursor">Previous</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} px-1">
                <a href="{{ $paginator->url($i) }}" class="block px-4 py-2 hover:text-orange-500 hover:cursor">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} px-1">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}"  class="block px-4 py-2 hover:text-orange-500 hover:cursor">Next</a>
        </li>
    </ul>
@endif
