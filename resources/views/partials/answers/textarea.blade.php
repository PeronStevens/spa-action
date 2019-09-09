<textarea name="questions[{{ $question->name }}]"
          id="question-{{ $question->id }}"
          class="form-control">{{ $question->value }}</textarea>
<div class="invalid-feedback">{{ $errors->first("questions.{$question->name}") }}</div>
