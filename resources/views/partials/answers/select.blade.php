@php
    $selected = (
        ( ! is_null($question->value) && $question->value == $answer->value) ||
        $answer->is_selected
    ) ? 'selected' : '';
@endphp
@if($loop->first)
    <div class="select-wrap-wrap pos-relative">
        <div class="select-wrap">
            <select name="questions[{{ $question->name }}]"
                    id="question-{{ $question->id }}"
                    class="form-control mb-2">
                <option value="" hidden selected></option>
@endif
<option value="{{ $answer->value }}"
        data-correct="{{ $answer->correct }}"
        {{ $selected }}>{!! $answer->content !!}</option>
@if($loop->last)
            </select>
        </div>
    </div>
    <div class="invalid-feedback">{{ $errors->first("questions.{$question->name}") }}</div>
@endif
