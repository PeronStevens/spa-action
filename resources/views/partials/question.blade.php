@php($question->name = $question->name ?? $question->id)
@php($question->value = old("questions.{$question->name}") ?? $question->value)
@php($is_invalid = $errors->has('questions.'.$question->name) ? 'is-invalid' : '')

<div class="form-group {{ $is_invalid }} {{ $question->hidden ? 'hidden' : '' }}">
    <label for="question-{{ $question->id }}">{!! $question->content !!}</label>
    @foreach($question->answers as $answer)
        @php($answer->value = $answer->value ?? $answer->id)
        @include('partials.answers.'.$question->type, compact('question', 'answer', 'disabled'))
    @endforeach
    @if($question->explanation)
        <div class="alert alert-{{ $activity ? 'activity-'.$activity->position : 'info' }} explanation-feedback"
             role="alert">
            <strong>EXPLANATION:</strong><br>
            {!! $question->explanation !!}
        </div>
    @endif
</div>