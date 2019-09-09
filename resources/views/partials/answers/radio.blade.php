@php
    $checked = (
        ( ! is_null($question->value) && $question->value == $answer->value) ||
        $answer->is_selected
    ) ? 'checked' : '';
@endphp
<div class="form-check">
    <input type="radio"
           name="questions[{{ $question->name }}]"
           id="answer-{{ $answer->id }}"
           class="form-check-input"
           value="{{ $answer->value }}"
           data-correct="{{ $answer->correct ?? '0' }}"
           {{ $checked }} {{ $disabled?'disabled':'' }}>
    <label class="form-check-label" for="answer-{{ $answer->id }}">
        {!! $answer->content !!}
    </label>
    @if($loop->last)
        <div class="invalid-feedback">{{ $errors->first("questions.{$question->name}") }}</div>
    @endif
</div>
