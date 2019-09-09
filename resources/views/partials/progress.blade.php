<div class="bg-activity-{{ $activity->position }} p-2px br-r">
    <div class="progress br-r bg-white p-2px">
        <div class="progress-bar br-r bg-activity-{{ $activity->position }} p-2px"
             role="progressbar"
             style="width: {{ $activity->progress }}%;"
             aria-valuenow="{{ $activity->progress }}"
             aria-valuemin="0"
             aria-valuemax="100">{{ $activity->progress }}%</div>
    </div>
</div>
