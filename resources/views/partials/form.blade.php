<form action="{{ $action }}"
      method="{{ $type }}"
      id="test-{{ $test->id }}"
      class="mb-2 {{ $errors->any() ? 'validated' : '' }}"
      data-test-type="{{ $test->type }}"
      novalidate>
    @csrf
    @foreach($test->questions as $question)
        @include('partials.question', [
            'question' => $question,
            'disabled' =>
                ($test->type === 'pre' && !$activity->uncompletedPreTests()->exists())
                || ($test->type !== 'pre' && $test->is_passed)
        ])
    @endforeach
    @isset($submit_btn)
        <button type="submit" class="btn btn-{{ isset($activity) ? 'activity-' . $activity->position : 'success' }}">
            {{ $submit_btn }}
        </button>
    @endisset
</form>

@push('js')
    <script>
      $(function () {

          @if($activity->should_confirm ?? false)
          $('.next-page').click(function (e) {
            e.preventDefault();
            if (confirm('Are you ready to submit your Pre-Test answers?')) {
              $('#test-{{ $test->id }}').submit();
            }
          });
          @endif

      });
    </script>
@endpush
