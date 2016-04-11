<?php if($event == 'breaking'): ?>
<div class="event-header-breaking mb">
Breaking news
</div>
<?php elseif($event == 'live'): ?>
<div class="event-header-live mb">
Live
</div>

<?php elseif($event == 'now'): ?>
<div class="event-header-now mb">
Lige nu
</div>

<?php elseif($event == 'inawhile'): ?>
<div class="event-header-inawhile mb">
Om lidt...
</div>

<?php elseif($event == 'update'): ?>
<div class="event-header-update mb">
Opdateres
</div>

<?php endif; ?>