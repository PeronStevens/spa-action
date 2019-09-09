<div class="page-nav br-r">
    <div class="d-flex justify-content-between align-items-center">
        <div class="pr-2">
            <a href="{{ url()->route('prev', ['activity' => $activity]) }}"
               class="prev-page btn btn-outline-activity-{{ $activity->position }}">
                <i class="fas fa-chevron-left"></i>
            </a>
        </div>
        <div class="flex-grow-1">
            @include('partials.progress')
        </div>
        <div class="pl-2">
            @if(($test ?? false)
                && (($test->type === 'pre' && $activity->uncompletedPreTests()->exists())
                || ($test->type !== 'pre' && !$test->is_passed)))
                <button type="submit" form="test-{{ $test->id }}"
                        class="next-page btn btn-outline-activity-{{ $activity->position }}">
                    <i class="fas fa-chevron-right"></i>
                </button>
            @else
                <a href="{{ url()->route('next', ['activity' => $activity]) }}"
                   class="next-page btn btn-outline-activity-{{ $activity->position }}">
                    <i class="fas fa-chevron-right"></i>
                </a>
            @endif
        </div>
    </div>
</div>

@push('js')
    <script>
      $(function () {
        $('.next-page').click(function (e) {
          var $el = $(this);
          $el.addClass('disabled');
          setTimeout(function () {
            $el.removeClass('disabled');
          }, 10000);
        });
      });
    </script>
@endpush