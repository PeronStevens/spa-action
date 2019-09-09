<input type="text"
       name="questions[{{ $question->name }}]"
       id="question-{{ $question->id }}"
       class="form-control"
       value="{{ $question->value }}">
<div class="invalid-feedback">{{ $errors->first("questions.{$question->name}") }}</div>
