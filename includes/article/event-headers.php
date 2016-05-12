<?php if($event == 'breaking'): ?>
<div class="event-header-breaking">
Breaking news
</div>
<?php elseif($event == 'live'): ?>
<div class="event-header-live">
Live
</div>

<?php elseif($event == 'now'): ?>
<div class="event-header-now">
Lige nu
</div>

<?php elseif($event == 'inawhile'): ?>
<div class="event-header-inawhile">
Om lidt...
</div>

<?php elseif($event == 'update'): ?>
<div class="event-header-update">
Opdateres
</div>

<?php endif; ?>