@php $previous = $datas->currentPage() - 1;
$numbersPerSection = 7;
$section = ceil($datas->currentPage() / $numbersPerSection);
$sections = ceil($datas->lastPage() / $numbersPerSection);
$next = $datas->currentPage() + 1;
$pageStart = ($section - 1) * $numbersPerSection + 1;
$pageEnd = ($section - 1) * $numbersPerSection + $numbersPerSection;
if ($section == $sections) {
    $pageEnd = $datas->lastPage();
}
$backword = $datas->currentPage() - $numbersPerSection;
$forword = $datas->currentPage() + $numbersPerSection; @endphp <nav aria-label="..."
    class="pagintion_nav {{ $datas->lastPage() == 1 ? 'pagination_display' : '' }}">
    <ul class="pagination">
        <li class="page-item paginate_reload_prevent {{ $datas->currentPage() == '1' ? 'disabled' : '' }}">
            <a class="page-link" data-id="{{ $datas->currentPage() - 1 }}"
                href="{{ URL::to('/admin/' . $model . '?page=' . $previous) }}">Previous</a>
        </li>
        @if ($section > 1)
            <li class="page-item paginate_reload_prevent">
                <a class="page-link" data-id="1" href="{{ URL::to('/admin/' . $model . '?page=1') }}">1</a>
            </li>
            <li class="page-item paginate_reload_prevent">
                <a class="page-link" href="{{ URL::to('/admin/' . $model . '?page=' . $backword) }}">...</a>
            </li>
        @endif
        @for ($i = $pageStart; $i <= $pageEnd; $i++)
            <li class="page-item paginate_reload_prevent {{ $datas->currentPage() == $i ? 'active' : '' }}">
                <a class="page-link" data-id="{{ $i }}"
                    href="{{ URL::to('/admin/' . $model . '?page=' . $i) }}">{{ $i }}</a>
            </li>
        @endfor
        @if ($section < $sections)
            <li class="page-item paginate_reload_prevent">
                <a class="page-link" href="{{ URL::to('/admin/' . $model . '?page=' . $forword) }}">...</a>
            </li>
            <li class="page-item paginate_reload_prevent">
                <a class="page-link" data-id="{{ $datas->currentPage() + 1 }}"
                    href="{{ URL::to('/admin/' . $model . '?page=' . $datas->lastPage()) }}">{{ $datas->lastPage() }}</a>
            </li>
        @endif
        <li
            class="page-item paginate_reload_prevent {{ $datas->currentPage() == $datas->lastPage() ? 'disabled' : '' }}">
            <a class="page-link" data-id="{{ $datas->currentPage() + 1 }}"
                href="{{ URL::to('/admin/' . $model . '?page=' . $next) }}">Next</a>
        </li>
    </ul>
</nav>
<br><br>
