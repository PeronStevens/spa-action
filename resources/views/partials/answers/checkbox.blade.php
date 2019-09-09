@php
    $checked = (
        ( ! is_null($question->value) && $question->value == $answer->value) ||
        $answer->is_selected
    ) ? 'checked' : '';
dump($question->value, $answer->value, $answer->is_selected)
@endphp
<div class="form-check">
    <input class="form-check-input"
           type="checkbox"
           name="questions[{{ $question->name }}][{{ $answer->value }}]"
           id="answer-{{ $answer->id }}"
           value="{{ $answer->value }}"
           {{ $checked }}>
    <label class="form-check-label" for="answer-{{ $answer->id }}">
        {!! $answer->content !!}
    </label>
</div>
