@php
    $this_page = Request::is(preg_replace('/\/(.+)/', "$1", $url));
    $btn_class = $btn_class ?? '';

    if (isset($btn)) {
        $btn_class .= ' btn ';

        if (isset($activity) && strpos(url()->current(), 'activities')) {
            $btn_class .= 'btn-activity-' . $activity->position;
        } else {
            $btn_class .= 'btn-secondary';
        }
    }
@endphp
<li class="nav-item">
    <a class="nav-link {{ $btn_class }} {{ $this_page ? 'active' : '' }}"
       href="{{ $url }}"
       target="{{ $target ?? '_self' }}">
        {{ $name }}
        @if($this_page)
            <span class="sr-only">(current)</span>
        @endif
    </a>
</li>